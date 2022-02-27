<x-app-layout>
    <div class="bg-flag-yellow min-h-screen bg-right section-bg" style="background-image: url( {{ asset('images/wohnraum-bg.svg') }}); background-size: 33.33%; background-repeat: repeat-y;">
        <div class="container py-24"
             x-data="{ show: 0 }"
             x-init="
            interval = window.setInterval(() => show++, 400);
            $watch('show', (show) => show > 4 ? clearInterval(interval) : null)
        ">
            <div class="flex pr-20 md:pr-0">
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
                                @elseif(session('applocale') == 'en')
                                    Sometimes it seems as if there is no end to the crises - in the last two years and especially in the last few days. In times like these, two things are extremely important: STAYING TOGETHER and TAKING RESPONSIBILITY. With the "Immo hilft" initiative, we in the real estate industry are doing just that.
                                @else
                                    Manchmal scheint es, als würden die Krisen kein Ende nehmen – gerade in den letzten zwei Jahren und besonders in den letzten paar Tagen. In solchen Zeiten sind zwei Dinge besonders wichtig: ZUSAMMENHALTEN und VERANTWORTUNG ÜBERNEHMEN. Mit der Initiative „Immo hilft“ machen wir aus der Immobilienwirtschaft genau das.
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


                            <div class="font-medium md:font-semibold"
                                 x-show="show > 3"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-90"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-90">

                                @if(session('applocale') == 'uk')
                                    <p class="font-medium md:font-semibold">
                                        В ініціативі «Immo Hilft»
                                        - Beacon Invest, Bondi Consult, EHL, goreeo, Hawlik Gerginski, Immobilien Redaktion, KE Wohnimmobilien, Webentwicklung Gerhard Popp, Kommunikation Unteregger, REMAX Austria und WISAG, Zeiger Immobilien Marketing -
                                        саме цим ми і займаємося в галузі нерухомості. Ініціатори закликають надати тимчасово порожні квартири для біженців з України. Таким чином кожен може надати допомогу швидко і без бюрократії.
                                        <br>
                                        Якщо кожна велика компанія в Австрії вирішить надати ОДНУ квартиру, ми можемо запропонувати притулок до 5000 осіб. Ми звертаємося не тільки до компаній, ми також вдячні за будь-яку допомогу від приватних осіб. Давайте триматися разом і допомагати людям, які терміново потребують нашої допомоги прямо зараз!
                                    </p>
                                @elseif(session('applocale') == 'en')
                                    <p class="font-medium md:font-semibold">
                                        The initiators - Beacon Invest, Bondi Consult, EHL, goreeo, Hawlik Gerginski, Immobilien Redaktion, KE Wohnimmobilien, Webentwicklung Gerhard Popp, Kommunikation Unteregger, REMAX Austria and WISAG, Zeiger Immobilien Marketing are calling on people to provide temporary empty rooms in Austria for refugees from Ukraine.
                                    </p>
                                    <p class="font-medium md:font-semibold">
                                        In this way, everyone can help quickly and without bureaucracy. If every major real estate company in Austria decides to provide ONE flat, we can offer refuge to up to 5,000 people. However, we are not only appealing to companies, but are also grateful for any help from private individuals.
                                    </p>
                                    <p class="font-medium md:font-semibold">
                                        Let's stand together and help people who urgently need our help right now!
                                    </p>
                                @else
                                    <p class="font-medium md:font-semibold">Die Initiatoren – Beacon Invest, Bondi Consult, EHL, goreeo, Hawlik Gerginski, Immobilien Redaktion, KE Wohnimmobilien, Webentwicklung Gerhard Popp, Kommunikation Unteregger, REMAX Austria und WISAG, Zeiger Immobilien Marketing rufen dazu auf, temporär leere Räume für geflüchtete Menschen aus der Ukraine zur Verfügung zu stellen.</p>
                                    <p class="font-medium md:font-semibold">So kann jeder und jede rasch und ohne Bürokratie Hilfe leisten. Entscheidet sich jedes größere Immo-Unternehmen in Österreich dazu, EINE Wohnung bereitzustellen, bieten wir damit bis zu 5.000 Menschen eine Zuflucht. Wir appellieren aber nicht nur an Unternehmen, sondern sind auch für jede Hilfeleistung von Privatpersonen dankbar.</p>
                                    <p class="font-medium md:font-semibold">Halten wir zusammen und helfen wir Menschen, die unsere Hilfe gerade dringend benötigen!</p>
                                @endif
                            </div>
                            <a href="#apply" x-show="show > 4" class="mt-10 shadow-xl hover:shadow-lg focus:shadow-lg flex w-full justify-center bg-flag-blue text-white font-bold text-xl py-3">{{ __('contribute') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-flag-blue min-h-screen bg-left section-bg-left" style="background-image: url( {{ asset('images/wohnraum-bg.svg') }}); background-size: 33.33%; background-repeat: repeat-y;">
        <div class="container py-24" id="apply">
            <div class="flex justify-end">
                <div class="w-full md:w-1/2 flex justify-end md:justify-center items-center">
                    <div class="max-w-xl">
                        @livewire('donate-space-form')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-24">
        <div class="flex flex-col md:flex-row content">
            <div class="w-full md:w-1/2 flex justify-end md:justify-center items-center">
                <div class="max-w-xl">
                    @if(session('applocale') == 'uk')
                        <h1>Ми знаємо, що житлової площі обмаль. Крім того, ми також будемо вдячні, якщо ви можете зробити пожертву на рахунок Caritas:</h1>
                    @elseif(session('applocale') == 'en')
                        <h1>Living space is a rare good, we know that. Alternatively we appreciate your donation with the subject IMMO HILFT to the account of our collaboration partner Caritas</h1>
                    @else
                        <h1>Wohnraum ist knapp, wir wissen das. Wir sind Ihnen alternativ auch für eine Spende mit dem Betreff IMMO HILFT an das Konto unseres Partners, der Caritas dankbar:</h1>
                    @endif
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center items-end">
                <img src="data:image/png;base64,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" class="w-48 h-auto">
                <address>
                    Erste Bank<br>
                    BIC: GIBAATWWXXX<br>
                    IBAN: AT23 2011 1000 0123 4560
                </address>
                @if(session('applocale') == 'uk')
                @elseif(session('applocale') == 'en')
                    <p>Please use as "IMMO-HILFT" subject.</p>
                    <p>After you donated, you can send an Email to
                        <a href="mailto:spenden@immo-hilft.at">spenden@immo-hilft.at</a>, if you want to show up in our dontaors list.
                    </p>
                    <p>Of course, you are also welcome to donate anonymously.</p>
                @else
                    <p>Bitte geben Sie als Verwendungszweck "IMMO-HILFT" an.</p>
                    <p>Wenn Sie gespendet haben, schicken Sie bitte ein E-Mail an
                        <a href="mailto:spenden@immo-hilft.at">spenden@immo-hilft.at</a>, damit wir Sie in unsere Spenderliste aufnehmen können.
                    </p>
                    <p>Natürlich können Sie aber gerne auch anonym spenden.</p>
                @endif
            </div>
        </div>
    </div>


</x-app-layout>

