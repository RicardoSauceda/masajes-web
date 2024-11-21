@extends('templates.main-auth')

@section('title') User Register @endsection

@section('main')
<div class="flex bg-slate-100 w-full justify-center items-center h-auto p-10">
  <div class="px-10 py-5 bg-white w-1/3 shadow-sm">
    <h1 class="text-center font-bold text-2xl mb-5">User Register</h1>
    <form action="">
      <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
        <input type="name" id="name"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Name" required />
      </div>
      <div class="mb-5">
        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last name</label>
        <input type="last_name" id="last_name"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Last Name" required />
      </div>
      <div class="mb-5">
        <input type="submit" name="submit" value="Regiter"
          class="w-full bg-blue-500 hover:bg-blue-600 transition-colors ease-in-out duration-200 cursor-pointer text-white p-2 rounded-lg font-bold text-lg">
      </div>
    </form>
  </div>
</div>
@endsection