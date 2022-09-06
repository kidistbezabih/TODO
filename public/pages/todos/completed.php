<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Completed Tasks</title>
  </head>
  <body>
    <div class="flex justify-center items-center min-h-screen bg-[#cbd7e3]">
        <div class="h-[70vh]  w-[30vw] bg-white flex-column rounded-lg p-4 relative">
            <div class="mt-3 h-[5%] text-sm text-[#8ea6c8] flex justify-between items-center">
                <p>Thursday 28 May</p>
                <p>8:00 AM</p>
            </div>
            <p class="text-xl font-semibold mt-2 text-[#063c76]">To-do List</p>
      
            <ul class="my-4 p-4 h-[85%] overflow-y-auto">
              <div class="mt-3 mb-9 h-[5%] text-sm text-[#8ea6c8] flex justify-between items-center">
                  <a href="#" class="px-4 py-3 bg-blue-500 text-white rounded-[7px]"><strike>Completed Tasks</strike></a>
                  <p class="px-4 py-3 bg-green-500 text-white rounded-[7px]">Create New Task</p>
              </div>
              <li class=" mt-4" id="1">
                  <div class="flex gap-2">
                      <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                          <span id="check1" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center"><i class="text-white fa fa-check"></i></span>
                          <strike id="strike1" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">Make the bed please</strike>
                      </div>
                      <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">9:00 AM</span>
                  </div>
              </li>
              <li class=" mt-4" id="2">
                  <div class="flex gap-2">
                      <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                          <span id="check2" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(2)"><i class="text-white fa fa-check"></i></span>
                          <strike id="strike2" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">Your face is waiting for you</strike>
                      </div>
                      <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">12:00 PM</span>
                  </div>
              </li>
              <li class=" mt-4" id="3">
                  <div class="flex gap-2">
                      <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                          <span id="check3" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(3)"><i class="text-white fa fa-check"></i></span>
                          <strike id="strike3" class="strike_none  text-sm ml-4 text-[#5b7a9d] font-semibold">Turn on the engine(PC)</strike>
                      </div>
                      <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">1:00 PM</span>
                  </div>
              </li>
              <li class=" mt-4" id="4">
                  <div class="flex gap-2">
                      <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                          <span id="check4" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(4)"><i class="text-white fa fa-check"></i></span>
                          <strike id="strike4" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">List down the MITs</strike>
                      </div>
                      <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">4:20 PM</span>
                  </div>
              </li>
              <li class=" mt-4" id="5">
                  <div class="flex gap-2">
                      <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                          <span id="check5" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(5)"><i class="text-white fa fa-check"></i></span>
                          <strike id="strike5" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">Unstoppable work</strike>
                      </div>
                      <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">9:00 PM</span>
                  </div>
              </li>
              <li class=" mt-4" id="5">
                  <div class="flex gap-2">
                      <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                          <span id="check5" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(5)"><i class="text-white fa fa-check"></i></span>
                          <strike id="strike5" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">Unstoppable work</strike>
                      </div>
                      <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">9:00 PM</span>
                  </div>
              </li>
              <li class=" mt-4" id="5">
                  <div class="flex gap-2">
                      <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                          <span id="check5" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(5)"><i class="text-white fa fa-check"></i></span>
                          <strike id="strike5" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">Unstoppable work</strike>
                      </div>
                      <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center ">9:00 PM</span>
                  </div>
              </li>
            </ul>
        </div>
    </div>
  </body>
</html>