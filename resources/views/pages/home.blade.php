<x-app-layout>
    <div class="bg-flag-yellow min-h-screen bg-right section-bg" style="background-image: url( {{ asset('images/wohnraum-bg.svg') }}); background-size: 33.33%; background-repeat: repeat-y;">
        <div class="container py-24"
             x-data="{ show: 0 }"
             x-init="
            interval = window.setInterval(() => show++, 400);
            $watch('show', (show) => show > 4 ? clearInterval(interval) : null)
        ">
            <div class="flex">
                <div class="w-full md:w-1/2 flex justify-start md:justify-center items-center">
                    <div class="max-w-xl">
                        <div class="content">
                            <p x-show="show > 1"
                               x-transition:enter="transition ease-out duration-300"
                               x-transition:enter-start="opacity-0 scale-90"
                               x-transition:enter-end="opacity-100 scale-100"
                               x-transition:leave="transition ease-in duration-300"
                               x-transition:leave-start="opacity-100 scale-100"
                               x-transition:leave-end="opacity-0 scale-90"
                               class="font-medium md:font-semibold">

                                @if(session('applocale') == 'uk')
                                    Іноді кризи здаються нескінченними - особливо в останні два роки і особливо в останні кілька днів. У такі часи особливо важливі дві речі: триматися РАЗОМ і ВЗЯТИ ВІДПОВІДАЛЬНІСТЬ.
                                @else
                                    Manchmal scheint es als, würden die Krisen kein Ende nehmen – gerade in den letzten zwei Jahre und besonders in den letzten paar Tagen. In solchen Zeiten sind zwei Dinge besonders wichtig: ZUSAMMENHALTEN und VERANTWORTUNG ÜBERNEHMEN. Mit der Initiative „Immo hilft“ machen wir aus der Immobilienwirtschaft genau das.
                                @endif


                            </p>


                            <div class="font-bold my-10 text-3xl md:text-5xl"
                                 x-show="show > 2"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-90"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-90"
                            >IMMO HILFT.
                            </div>


                            <p class="font-medium md:font-semibold"
                               x-show="show > 3"
                               x-transition:enter="transition ease-out duration-300"
                               x-transition:enter-start="opacity-0 scale-90"
                               x-transition:enter-end="opacity-100 scale-100"
                               x-transition:leave="transition ease-in duration-300"
                               x-transition:leave-start="opacity-100 scale-100"
                               x-transition:leave-end="opacity-0 scale-90">

                                @if(session('applocale') == 'uk')
                                    В ініціативі «Immo Hilft» саме цим ми і займаємося в галузі нерухомості. Ініціатори закликають надати тимчасово порожні квартири для біженців з України. Таким чином кожен може надати допомогу швидко і без бюрократії.<br>
                                    Якщо кожна велика компанія в Австрії вирішить надати ОДНУ квартиру, ми можемо запропонувати притулок до 5000 осіб. Ми звертаємося не тільки до компаній, ми також вдячні за будь-яку допомогу від приватних осіб. Давайте триматися разом і допомагати людям, які терміново потребують нашої допомоги прямо зараз!

                                @else
                                    Die Initiatoren – Beacon Invest, EHL, goreeo, Hawlik Gerginski, KE Wohnimmobilien, REMAX Austria, Walter Senk, Michaela Unteregger und Zeiger Immobilien Marketing rufen dazu auf, temporär leere Räume für geflüchtete Menschen aus der Ukraine zur Verfügung zu stellen.<br>
                                    So kann jeder und jede rasch und ohne Bürokratie Hilfe leisten. Entscheidet sich jedes größere Immo-Unternehmen in Österreich dazu, EINE Wohnung bereitzustellen, bieten wir damit bis zu 5.000 Menschen eine Zuflucht. Wir appellieren aber nicht nur an Unternehmen, sondern sind auch für jede Hilfeleistung von Privatpersonen dankbar. Halten wir zusammen und helfen wir Menschen, die unsere Hilfe gerade dringend benötigen!
                                @endif
                            </p>
                        </div>
                        <a href="#apply" x-show="show > 4" class="mt-10 shadow-xl hover:shadow-lg focus:shadow-lg flex w-full justify-center bg-flag-blue text-white font-bold text-xl py-3">{{ __('contribute') }}</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="bg-flag-blue min-h-screen bg-left section-bg-left" style="background-image: url( {{ asset('images/wohnraum-bg.svg') }}); background-size: 33.33%; background-repeat: repeat-y;">
        <div class="container py-24"
             x-data="{ show: 0 }"
             x-init="
            interval = window.setInterval(() => show++, 400);
            $watch('show', (show) => show > 4 ? clearInterval(interval) : null)
        ">
        </div>
    </div>
</x-app-layout>

