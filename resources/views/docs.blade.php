<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('stoplight.title') }}</title>
    <!-- Embed elements Elements via Web Component -->
    <script src="https://unpkg.com/@stoplight/elements@beta/web-components.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@stoplight/elements@beta/styles/elements.min.css">
  </head>
  <body>

    <elements-api
      apiDescriptionUrl="{{ config('stoplight.openapi.path') }}"
      router="{{ config('stoplight.config.router') }}"
      layout="{{ config('stoplight.config.layout') }}"
    />

  </body>
</html>
