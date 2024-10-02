<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
        tailwind.config = {
          prefix: "tw-",
          corePlugins: {
             preflight: false,
          }
        }
  </script>
  <style>
    * { box-sizing: border-box; padding: 0; margin: 0; }
    th, td { vertical-align: middle; }
  </style>
</head>
<body class="tw-h-screen tw-px-24">
    <div class="tw-w-full tw-h-full tw-flex tw-flex-col tw-justify-center tw-items-center tw-gap-2">
        <h1 class="tw-w-full">Crudder🍁</h1>
        <div class="tw-w-full tw-flex tw-justify-between">
            <div class="tw-w-full tw-flex tw-gap-2 tw-justify-end">
                <button type="button" class="btn btn-secondary tw-mr-auto">Refresh <i class="bi bi-arrow-clockwise"></i></button>
                <button type="button" class="btn btn-success">Add <i class="bi bi-plus-lg"></i></button>
                <button type="button" class="btn btn-warning">Configure <i class="bi bi-gear"></i></button>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <button type="button" class="btn btn-info tw-mr-1">Edit <i class="bi bi-pencil"></i></button>
                    <button type="button" class="btn btn-danger">Delete <i class="bi bi-trash"></i></button>
                </td>
              </tr>
            </tbody>
        </table>
    </div>
</body>
</html>