<x-layout>

<form class="col c" method="post" name="register_form" id="register_form" action="/register">
  @csrf

  <x-input :value="old('fullname')"
    title="Full Name"
    required>fullname</x-input>

  <x-input type="email" :value="old('email')"
    title="E-Mail"
    required>email</x-input>
  <x-input type="email" :value="old('email_confirmation')"
    title="Confirm E-Mail"
    required>email_confirmation</x-input>

  <x-input type="password"
    title="Password"
    required>password</x-input>
  <x-input type="password"
    title="Confirm Password"
    required>password_confirmation</x-input>

  <button type="submit">Register</button>
</form>

</x-layout>
