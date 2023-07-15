<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* CSS tambahan untuk mengatur tampilan yang indah */
    .container {
      max-width: 600px;
      margin: 0 auto;
    }
    .profile-card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
    }
    .profile-card h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .profile-card p {
      margin-bottom: 8px;
    }
    .change-password-btn {
      display: inline-block;
      background-color: #4caf50;
      color: #fff;
      padding: 10px 16px;
      border-radius: 4px;
      text-decoration: none;
      font-weight: bold;
    }
    .change-password-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  @include('layouts.navigation')
  <div class="container">
    <div class="profile-card">
      <h2>Profile User</h2>
      <p><strong>Username:</strong> {{ Auth::user()->username }}</p>
      <p><strong>Bank:</strong> {{ Auth::user()->bank }}</p>
      <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
      <p><strong>Nomor Rekening:</strong> {{ Auth::user()->noRek }}</p>
      <p><strong>Nomor HP:</strong> {{Auth::user()->nomorHP }}</p>
      <a href="{{ route('changePassword') }}" class="change-password-btn">Ubah Password</a>
    </div>
  </div>
</body>
