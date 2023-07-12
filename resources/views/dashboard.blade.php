<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pilih Pools Gacormu
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="flex flex-col md:flex-row">
                                    <div class="w-full md:w-1/4 h-32 p-2">
                                        <a href="/macau4d">
                                            <div class="p-4 rounded-lg h-full" style="background-color: #fc8c2c">
                                                <h1 class="text-xl font-semibold mb-2" style="color: #541493">Macau Pools</h1>
                                                <div id="countdownmacau" class="text-3xl text-white font-bold"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-full md:w-1/4 h-32 p-2">
                                        <a href="/macau4d">
                                            <div class="p-4 rounded-lg h-full" style="background-color: #fc8c2c">
                                                <h1 class="text-xl font-semibold mb-2" style="color: #541493">Hongkong Pools</h1>
                                                <div id="countdownmacau" class="text-3xl text-white font-bold"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-full md:w-1/4 h-32 p-2">
                                        <a href="/macau4d">
                                            <div class="p-4 rounded-lg h-full" style="background-color: #fc8c2c">
                                                <h1 class="text-xl font-semibold mb-2" style="color: #541493">Taiwan Pools</h1>
                                                <div id="countdownmacau" class="text-3xl text-white font-bold"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-full md:w-1/4 h-32 p-2">
                                        <a href="/macau4d">
                                            <div class="p-4 rounded-lg h-full" style="background-color: #fc8c2c">
                                                <h1 class="text-xl font-semibold mb-2" style="color: #541493">Singapore Pools</h1>
                                                <div id="countdownmacau" class="text-3xl text-white font-bold"></div>
                                            </div>
                                        </a>
                                    </div>     
                                       
                               
                            
                        </div>
                        <div class="flex flex-col md:flex-row">
                                    <div class="w-full md:w-1/4 h-32 p-2">
                                        <a href="/macau4d">
                                            <div class="p-4 rounded-lg h-full" style="background-color: #fc8c2c">
                                                <h1 class="text-xl font-semibold mb-2" style="color: #541493">Sidney Pools</h1>
                                                <div id="countdownmacau" class="text-3xl text-white font-bold"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-full md:w-1/4 h-32 p-2">
                                        <a href="/macau4d">
                                            <div class="p-4 rounded-lg h-full" style="background-color: #fc8c2c">
                                                <h1 class="text-xl font-semibold mb-2" style="color: #541493">PCSO Pools</h1>
                                                <div id="countdownmacau" class="text-3xl text-white font-bold"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-full md:w-1/4 h-32 p-2">
                                        <a href="/macau4d">
                                            <div class="p-4 rounded-lg h-full" style="background-color: #fc8c2c">
                                                <h1 class="text-xl font-semibold mb-2" style="color: #541493">Jepang Pools</h1>
                                                <div id="countdownmacau" class="text-3xl text-white font-bold"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-full md:w-1/4 h-32 p-2">
                                        <a href="/macau4d">
                                            <div class="p-4 rounded-lg h-full" style="background-color: #fc8c2c">
                                                <h1 class="text-xl font-semibold mb-2" style="color: #541493">China Pools</h1>
                                                <div id="countdownmacau" class="text-3xl text-white font-bold"></div>
                                            </div>
                                        </a>
                                    </div>     
                                       
                               
                            
                        </div>
                        
                    </div>
                    

                    
                

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
        function countdown(targetTimes, countdownElement) {
  const now = new Date().getTime();
  const nearestTime = targetTimes.reduce((nearest, target) => {
    const timeDiff = target - now;
    if (timeDiff > 0 && (nearest === null || timeDiff < nearest.timeDiff)) {
      return { timeDiff, target };
    }
    return nearest;
  }, null);

  if (nearestTime !== null) {
    const timeDiff = nearestTime.timeDiff;
    const target = nearestTime.target;

    const hours = Math.floor(timeDiff / (1000 * 60 * 60));
    const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

    countdownElement.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
  }

  setTimeout(() => {
    countdown(targetTimes, countdownElement);
  }, 1000);
}





        const targetTimesMacau = [
            new Date().setHours(16, 0, 0), // Misalnya, jam 16:00
            new Date().setHours(20, 0, 0), // Misalnya, jam 20:00
            new Date().setHours(23, 0, 0), // Misalnya, jam 23:00
        ];
        const countdownElementMacau = document.getElementById('countdownmacau');
        countdown(targetTimesMacau, countdownElementMacau);

        const targetTimesHongKong = [
            
            new Date().setHours(23, 30, 0), // Misalnya, jam 23:30
        ];
        const countdownElementHongKong = document.getElementById('countdownhongkong');
        countdown(targetTimesHongKong, countdownElementHongKong);

        const targetTimesSidney = [
            
            new Date().setHours(13, 35, 0), // Misalnya, jam 23:30
        ];
        const countdownElementSidney = document.getElementById('countdownsidney');
        countdown(targetTimesSidney, countdownElementSidney);

        const targetTimesSgp = [
            
            new Date().setHours(13, 35, 0), // Misalnya, jam 13:35
        ];
        const countdownElementSgp = document.getElementById('countdownsgp');
        countdown(targetTimesSgp, countdownElementSgp);

        
    </script>
