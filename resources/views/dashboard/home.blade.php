<x-layout>
    <h1>
        DashBoard
    </h1>
    

<section class="bg-white dark:bg-dark py-20 lg:py-[120px]">
    <div class="container mx-auto">
       <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
             <div class="max-w-full overflow-x-auto">
                <table class="w-full table-auto">
                   <thead>
                      <tr class="text-center bg-blue-950">
                         <th
                            class="w-1/6 min-w-[160px] border-l border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                            >
                            Username
                         </th>
                         <th
                            class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                            >
                            Email
                         </th>
                         <th
                            class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                            >
                            Role
                         </th>
                         <th
                            class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                            >
                            Created at
                         </th>
                      </tr>
                   </thead>
                   <tbody>
                    @foreach ($users as $user)
                      <tr>
                         <td
                            class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                            >
                            {{ $user->username }}
                         </td>
                         <td
                            class="text-dark border-b border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                            >
                            {{ $user->email }}
                         </td>
                         <td
                            class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                            >
                            {{ $user->role }}
                         </td>
                         <td
                            class="text-dark border-b border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                            >
                            {{ $user->created_at }}
                         </td>
                      
                      </tr>
                      @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- ====== Table Section End -->



</x-layout>