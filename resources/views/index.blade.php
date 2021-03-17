<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API Explained</title>
  </head>
  <body>
      <div class="container-fluid">
          <table class="table table-sm">
              <thead>
                  <th>Posts</th>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                <div>
                  <h4>{{ $post->title }}</h4>
                </div>
                @endforeach
              </tbody>
          </table>
      </div>
    {{ $posts->links() }}
  </body>
</html>