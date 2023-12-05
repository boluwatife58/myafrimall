@extends('layouts.app')
@section('page-title', 'MyAfriMall | Track Order')
@section('content')

<body class="font-sans">
        <!-- Header -->
        <header class="w-full md:w-11/12 xl:w-3/4 h-[10vh] flex justify-between items-center mx-auto p-5">
            <div class="w-2/5 md:w-1/6 lg:w-2/5">
                <img src="assets/logo.jpg" class="logo " alt="Myafrimall logo">
            </div>
        </header>
        
        <!-- Page content -->
        <div class="w-full md:w-11/12 xl:w-3/4 mx-auto p-5">
            <!-- WELCOME TEXT -->
            <div class="w-full flex justify-center items-center my-5 md:my-10 py-5">
                <h1 class="font-semibold text-dark text-3xl">Welcome to Myafrimall Parcel Tracking</h1>
            </div>
        
            <!-- TRACKING ORDER FORM -->
            <div class="w-full my:5 md:my-10">
                <p class="font-semibold text-dark text-base mb-3">Tracking number</p>
                <form action="#" class="flex flex-col md:flex-row justify-between center">
                    <div class="w-full md:w-2/3 md:mr-4 mb-3 md:mb-auto">
                        <label for="tracking_no"></label>
                        <input id="tracking_no" type="text" placeholder="Enter tracking number" class="w-full py-3 px-5 bg-grey text-dark text-sm placeholder-dark rounded focus:outline-none font-sans">         
                    </div>
        
                    <div class="w-full md:w-1/3">
                        <button class="w-full p-[10px] text-base text-white font-semibold bg-primary rounded border-none hover:bg-[#058d05] hover:border-transparent focus:outline-none focus:ring-2 focus:ring-[#058d05] focus:ring-offset-2">
                            Track
                        </button>
                    </div>
                </form>
            </div>

            <!-- GENERAL DETAILS -->
            <div class="w-full bg-gray1 p-5 md:p-3 lg:p-6 my-[50px]">
                <h2 class="p-3 font-sans font-bold text-3xl text-dark text-center">General Details</h2>
                <div class="w-1/3 mx-auto mb-10 p-0 border-b border-[#00000050] text-center"></div>

                <div class="w-11/12 md:w-4/5 mx-auto flex flex-col md:flex-row justify-between items-start">
                    <div>
                        <div class="mb-10">
                            <h3 class=" font-semibold text-2xl mb-5">Shipper Information</h3>
                            <p class="text-base my-4">
                                <span class="font-medium">Name: </span>
                                Miss Mary
                            </p>
                            <p class="text-base my-4">
                                <span class="font-medium">Phone Number:</span>
                                08168378748
                            </p>
                        </div>
                
                        <div class="my-8">
                            <h3 class="font-semibold text-2xl mb-5">Receiver Information</h3>
                            <p class="text-base my-4">
                                <span class="font-medium">Name: </span>
                                Mrs Adetola Oyebae
                            </p>
                            <p class="text-base my-4">
                                <span class="font-medium">Phone Number: </span>
                                +4632064084
                            </p>
                        </div>
                    </div>
                
                    <div>
                        <h3 class="font-semibold text-2xl mb-5">Shipment information</h3>
                        <p class="text-base my-4">
                            <span class="font-medium">Shipment mode:</span>
                            Air Cargo
                        </p>
                        <p class="text-base my-4">
                            <span class="font-medium">Destination:</span>
                            USA
                        </p>
                        <p class="text-base my-4">
                            <span class="font-medium">Total Weight: </span>
                            3kg
                        </p>
                        <p class="text-base my-4">
                            <span class="font-medium">Shipment Box: </span>
                            1 Box
                        </p>
                        <p class="text-base my-4">
                            <span class="font-medium">Destination: </span>
                            <span class="text-sm text-white bg-blue px-4 py-1 ml-2 rounded-md">Out of Delivery</span>
                        </p>
                    </div>            
                </div>
            </div>
        
            <!-- TRACKING ORDERS TABLE -->
            <div class="w-full bg-gray1 p-5 md:p-10 mt-[50px] mb-[100px] align-middle">
                <table class="min-w-full table-fixed block whitespace-nowrap overflow-x-scroll md:overflow-x-auto">
                    <thead class="bg-gray2 rounded-xl mb-4">
                        <tr>  
                            <th scope="col" class="p-3 text-sm font-semibold text-left">
                                <input type="checkbox" name="#" id="#">
                            </th>

                            <th scope="col" class="p-4 text-sm font-semibold text-left">
                                Date
                            </th>

                            <th scope="col" class="p-4 text-sm font-semibold text-left">
                                Time
                            </th>

                            <th scope="col" class="p-4 text-sm font-semibold text-left">
                                Details
                            </th>

                            <th scope="col" class="p-4 text-sm font-semibold text-left">
                                Remark
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-[#E9E5E5]">
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 text-sm font-normal">
                                <input type="checkbox" name="#" id="#">
                            </td>
                            <td class="p-5 text-sm font-normal capitalize">2022-07-22</td>
                            <td class="p-5 text-sm font-normal capitalize">15:04:51</td>
                            <td class="p-5 text-sm font-normal capitalize">Out of delivery</td>
                            <td class="p-5 text-sm font-normal capitalize">Shipment available for pickup/Out for delivery to other states</td>
                        </tr>

                        <tr class="hover:bg-slate-50">
                            <td class="p-4 text-sm font-normal">
                                <input type="checkbox" name="#" id="#">
                            </td>
                            <td class="p-5 text-sm font-normal capitalize">2022-07-22</td>
                            <td class="p-5 text-sm font-normal capitalize">15:04:51</td>
                            <td class="p-5 text-sm font-normal capitalize">Cleared customs</td>
                            <td class="p-5 text-sm font-normal capitalize">Shipment cleared by customers</td>
                        </tr>

                        <tr class="hover:bg-slate-50">
                            <td class="p-4 text-sm font-normal">
                                <input type="checkbox" name="#" id="#">
                            </td>
                            <td class="p-5 text-sm font-normal capitalize ">2022-07-22</td>
                            <td class="p-5 text-sm font-normal capitalize">15:04:51</td>
                            <td class="p-5 text-sm font-normal capitalize">Awaiting custom clearance</td>
                            <td class="p-5 text-sm font-normal capitalize">Shipment currently at ATL awaiting customs clerance</td>
                        </tr>

                        <tr class="hover:bg-slate-50">
                            <td class="p-4 text-sm font-normal ">
                                <input type="checkbox" name="#" id="#">
                            </td>
                            <td class="p-5 text-sm font-normal capitalize">2022-07-17</td>
                            <td class="p-5 text-sm font-normal capitalize">15:04:51</td>
                            <td class="p-5 text-sm font-normal capitalize">Enroute</td>
                            <td class="p-5 text-sm font-normal capitalize">Shipment enroute</td>
                        </tr>

                        <tr class="hover:bg-slate-50">
                            <td class="p-4 text-sm font-normal">
                                <input type="checkbox" name="#" id="#">
                            </td>
                            <td class="p-5 text-sm font-normal capitalize">2022-06-30</td>
                            <td class="p-5 text-sm font-normal capitalize">15:04:51</td>
                            <td class="p-5 text-sm font-normal capitalize">Processed</td>
                            <td class="p-5 text-sm font-normal capitalize">Shipment processed</td>
                        </tr>

                    </tbody>
                </table>
            </div> 
        </div>

        <script src="https://cdn.tailwindcss.com"></script>
    </body>

@endsection