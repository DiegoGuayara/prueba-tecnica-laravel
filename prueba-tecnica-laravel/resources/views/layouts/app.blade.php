<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mis Tareas')</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f6f7f9;
            color: #1f2933;
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            background: #243b53;
            color: #ffffff;
            padding: 20px 0;
        }

        .container {
            width: min(1080px, calc(100% - 32px));
            margin: 0 auto;
        }

        .topbar,
        .page-heading,
        .actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        h1,
        h2 {
            margin: 0;
        }

        main {
            padding: 28px 0 48px;
        }

        .panel {
            background: #ffffff;
            border: 1px solid #d9e2ec;
            border-radius: 8px;
            padding: 22px;
            box-shadow: 0 8px 20px rgba(16, 24, 40, 0.06);
        }

        .flash {
            margin-bottom: 18px;
            border: 1px solid #8ccfb1;
            border-radius: 8px;
            background: #e8f7ef;
            color: #17613a;
            padding: 12px 14px;
        }

        .errors {
            margin-bottom: 18px;
            border: 1px solid #f0b4b4;
            border-radius: 8px;
            background: #fff1f1;
            color: #8f1f1f;
            padding: 12px 14px;
        }

        .errors ul {
            margin: 8px 0 0;
            padding-left: 20px;
        }

        .button,
        button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 38px;
            border: 0;
            border-radius: 6px;
            background: #2f80ed;
            color: #ffffff;
            cursor: pointer;
            font: inherit;
            padding: 9px 14px;
            text-decoration: none;
            white-space: nowrap;
        }

        .button.secondary,
        button.secondary {
            background: #52616b;
        }

        .button.danger,
        button.danger {
            background: #c24141;
        }

        .button.success,
        button.success {
            background: #20895d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
        }

        th,
        td {
            border-bottom: 1px solid #d9e2ec;
            padding: 12px 10px;
            text-align: left;
            vertical-align: top;
        }

        th {
            color: #52616b;
            font-size: 14px;
        }

        .task-title {
            font-weight: 700;
        }

        .task-description {
            color: #52616b;
            margin-top: 4px;
        }

        .completed {
            opacity: 0.62;
        }

        .completed .task-title {
            text-decoration: line-through;
        }

        .badge {
            border-radius: 999px;
            display: inline-block;
            font-size: 13px;
            font-weight: 700;
            padding: 5px 9px;
            text-transform: capitalize;
        }

        .badge-alta {
            background: #fee2e2;
            color: #991b1b;
        }

        .badge-media {
            background: #fef3c7;
            color: #92400e;
        }

        .badge-baja {
            background: #dcfce7;
            color: #166534;
        }

        .empty {
            color: #52616b;
            padding: 34px 0 12px;
            text-align: center;
        }

        .form-grid {
            display: grid;
            gap: 16px;
            margin-top: 20px;
        }

        label {
            display: grid;
            gap: 7px;
            font-weight: 700;
        }

        input,
        select,
        textarea {
            border: 1px solid #bcccdc;
            border-radius: 6px;
            font: inherit;
            padding: 10px 12px;
            width: 100%;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .inline-form {
            display: inline;
        }

        @media (max-width: 760px) {
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                border-bottom: 1px solid #d9e2ec;
                padding: 12px 0;
            }

            td {
                border: 0;
                padding: 7px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container topbar">
            <h1>Mis Tareas</h1>
            <a class="button" href="{{ route('tareas.create') }}">Nueva tarea</a>
        </div>
    </header>

    <main>
        <div class="container">
            @if (session('success'))
                <div class="flash">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="errors">
                    <strong>Revisa los datos del formulario.</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </main>
</body>
</html>
