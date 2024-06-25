@extends('layouts.randy-frontend-layout')
@section('content')
<section>
    <div class="mt-8 p-5 w-full max-w-xs mx-auto border-dotted border border-gray-600 shadow-md rounded">
      <p>Please fill in your promo code for the album<br><span class="text-lg"><strong>Hit Parade Of Stars</strong></span></p>
        <form action="codes" method="POST" class="px-3 pt-2 mb-8">
            @csrf
          <div class="mb-4">
            <input class="shadow appearance-none bg-amber-50 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="code" type="text" name="code" placeholder="Your Download Code">
            <input type="hidden" id="album" name="album" value="217">
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-auto" type="submit">
              Submit
            </button>
          </div>
          @if (session('error_msg'))<p class="text-red-800 mt-3">{{ session('error_msg') }}</p> @endif
        </form>
      </div>
</section>
        
@endsection