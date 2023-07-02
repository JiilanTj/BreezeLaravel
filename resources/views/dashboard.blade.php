<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mengjudi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-gray-200 p-4 rounded-lg">
                        <h2 class="text-xl font-semibold mb-2">Countdown Menuju Waktu Terdekat</h2>
                        <div id="countdownmacau" class="text-3xl text-white font-bold"></div>
                    </div>
                    <div class="bg-gray-200 p-4 rounded-lg">
                        <h2 class="text-xl font-semibold mb-2">Countdown Menuju Waktu Terdekat</h2>
                        <div id="countdownhongkong" class="text-3xl text-white font-bold"></div>
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
                if (timeDiff > 0 && (nearest === null || timeDiff < nearest)) {
                    return timeDiff;
                }
                return nearest;
            }, null);

            if (nearestTime !== null) {
                const hours = Math.floor((nearestTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((nearestTime % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((nearestTime % (1000 * 60)) / 1000);

                countdownElement.innerText = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
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
            new Date().setHours(17, 0, 0), // Misalnya, jam 17:00
            new Date().setHours(21, 0, 0), // Misalnya, jam 21:00
            new Date().setHours(23, 30, 0), // Misalnya, jam 23:30
        ];
        const countdownElementHongKong = document.getElementById('countdownhongkong');
        countdown(targetTimesHongKong, countdownElementHongKong);
    </script>
