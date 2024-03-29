@extends('StaffMembers.layouts.user-dash-layout')
@section('title','Users Dashboard')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" overflow flex items-center justify-center" style="background: #edf2f7;">
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
  <div class="container max-w-screen-lg mx-auto">
    <div>
      <h2 class="font-semibold text-xl text-gray-600">Request Support Form</h2>
      <p class="text-gray-500 mb-6">One-click, Multiple Solutions.</p>

      <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">
            <p class="font-medium text-lg">User Problem Reportiung Form (ICTF-02)</p>
            <img src="{{asset('images/request.jpg')}}" alt="sideimage">
          </div>

          <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label for="full_name">Reported By: Name</label>
                <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Full Name"/>
              </div>

              <div class="md:col-span-5">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Email Address" />
              </div>
             
              <div class="md:col-span-3">
                <label for="address">Faculty</label>
                <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Faculty Name" />
              </div>

              <div class="md:col-span-2">
                <label for="city">Department</label>
                <input type="text" name="city" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Department Name" />
              </div>
              <div class="md:col-span-5">
                <label for="email">Floor / Office</label>
                <input type="text" name="floor" id="floor" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Floor, Office Number" />
              </div>
              <div class="md:col-span-2">
                <label for="country">Tel</label>
                <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Faculty Name" />
              </div>

              <div class="md:col-span-2">
                <label for="state">Date</label>
                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                    <input type="date" id="start" name="trip-start"
                    value="<?php echo date('Y-m-d'); ?>"
                    >
                </div>
              </div>

              <div class="md:col-span-1">
                <label for="zipcode">Time</label>
                <input type="text" name="zipcode" id="zipcode" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Time (LT)" value="" />
              </div>

              

      
              <div class="md:col-span-5 text-right">
                <div class="inline-flex items-end">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>
</body>
</html>

@endsection