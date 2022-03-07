<x-app-layout>
    <div class="bg-white min-h-screen bg-right section-bg" style="background-image: url( {{ asset('images/immohilft-bg-yellow.svg') }}); background-size: 33.33%; background-repeat: repeat-y;">
        <div class="container py-24"
             x-data="{ show: 0 }"
             x-init="
            interval = window.setInterval(() => show++, 400);
            $watch('show', (show) => show > 5 ? clearInterval(interval) : null)
        ">
            <div class="flex pr-20 md:pr-0">
                <div class="w-full md:w-1/2 flex justify-start md:justify-center items-center">
                    <div class="max-w-xl">
                        <div class="content">
                            <h1 x-show="show > 1"
                               x-transition:enter="transition ease-out duration-300"
                               x-transition:enter-start="opacity-0 scale-90"
                               x-transition:enter-end="opacity-100 scale-100"
                               x-transition:leave="transition ease-in duration-300"
                               x-transition:leave-start="opacity-100 scale-100"
                               x-transition:leave-end="opacity-0 scale-90"
                               class="font-medium md:font-semibold">

                                @if(session('applocale') == 'uk')
                                    Інформація для людей яким потрібно житло.
                                @elseif(session('applocale') == 'en')
                                    Informations for persons without accommodation.
                                @else
                                    Informationen für Personen ohne Unterbringung.
                                @endif
                            </h1>


                            <div class="font-medium md:font-semibold"
                                 x-show="show > 2"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-90"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-90">


                                @if(session('applocale') == 'uk')
                                    <address class="font-medium md:font-semibold my-10">
                                        Центр першої допомоги Sport&Fun Halle<br>
                                        Невідкладне проживання/харчування<br>
                                        2., Engerthstraße 267<br>
                                        Цілодобово - <a href="tel:+431400051302">01 4000 51 302</a>
                                    </address>

                                    <p class="font-medium md:font-semibold">
                                        У залі Sport&Fun Train of Hope разом з ASB та MA70 опікується аварійним забезпеченням та організацією аварійного відділення.<br>
                                        Для людей, які мають гостру потребу в екстреному розміщенні або невідкладній підтримці (їжа,..).<br>
                                        Також є тест на Covid та варіант вакцинації.<br>
                                    </p>
                                @elseif(session('applocale') == 'en')
                                    <address class="font-medium md:font-semibold my-10">
                                        First aid center Sport&Fun Halle<br>
                                        Acute care<br>
                                        2., Engerthstraße 267<br>
                                        Open 24 hrs - <a href="tel:+431400051302">01 4000 51 302</a>
                                    </address>

                                    <p class="font-medium md:font-semibold">
                                        In the Sport&Fun-Halle the organization Train of Hope in cooperation with ASB and MA70 takes care of acute treet and emergency shelters.
                                        Free Covid-Tests are also provided.
                                    </p>
                                @else
                                    <address class="font-medium md:font-semibold my-10">
                                        Erstversorgungszentrum Sport&Fun Halle<br>
                                        Akutunterbringung/Verpflegung<br>
                                        2., Engerthstraße 267<br>
                                        24h geöffnet - <a href="tel:+431400051302">01 4000 51 302</a>
                                    </address>

                                    <p class="font-medium md:font-semibold">
                                        In der Sport&Fun-Halle kümmert sich Train of Hope gemeinsam mit ASB und MA70 um Notversorgung und Notquartierorganisation.
                                        Für Personen, die akut Bedarf an Notunterbringung oder Akutunterstützung (Verpflegung,..) haben.
                                        Dort gibt es auch eine Covid-Test und Impfmöglichkeit.
                                    </p>
                                @endif
                            </div>


                            <div class="font-medium md:font-semibold"
                                 x-show="show > 4" x-cloak
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-90"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-90">

                                @if(session('applocale') == 'uk')
                                    <p class="font-medium md:font-semibold">Усіх прибулих перевіряють за допомогою тесту на антиген і ПЦР, щоб переконатися, що на місці немає інфекцій COVID (ті, у кого позитивний тест, розміщуються в карантинних приміщеннях)</p>
                                    <ul class="font-medium md:font-semibold">
                                        <li>Для надання першої медичної допомоги доступний лікар швидкої допомоги</li>
                                        <li>Люди забезпечуються упакованими ланчами та напоями, отримують предмети гігієни та, за потреби, одяг та дитяче харчування</li>
                                        <li>Якщо людям потрібна екстрена психосоціальна допомога, їм також нададуть допомогу на місці.  Для цього в центрі прибуття облаштували тимчасовий офіс.</li>
                                        <li>Люди можуть спокійно прибути і оговтатися від труднощів втечі.  Після цього оперативна група розміщує їх у аварійних приміщеннях, де вони можуть перебувати до організації більш тривалого проживання.</li>
                                        <li>Є початкова інформація, яка допоможе вам орієнтуватися в місті</li>
                                        <li>Буде облаштовано дитячий ігровий майданчик</li>
                                        <li>Індивідуальні шезлонги доступні для тих, хто хоче відпочити, або для тих, хто прибуває вночі.</li>
                                        <li>У холі є WLAN</li>
                                    </ul>
                                @elseif(session('applocale') == 'en')
                                    <p class="font-medium md:font-semibold">
                                        All arriving Persons will be antigen and pcr tested, to prevent COVID infections in the center ( positive tested persons will be placed in a quarantine shelter )
                                    </p>
                                    <ul class="font-medium md:font-semibold">
                                        <li>An medical emergency team is on the spot for fist aid</li>
                                        <li>Packed lunch, toiletries and if needed clothes and baby foods will be provided to every person.</li>
                                        <li>If needed acute psychosocial care can be provided and an temporary ordination has been established.</li>
                                        <li>Arriving Persons can rest and recover from their exertions. Afterwards the operations management will forward them to emergency housing, where it is possible to stay until a long term accommodation is conciliated.</li>
                                        <li>Base information about the city is provided</li>
                                        <li>A kids corner is established</li>
                                        <li>Single cots are ready for rest and persons who arrive during the night.</li>
                                        <li>WiFi is provided</li>

                                    </ul>
                                @else
                                    <p class="font-medium md:font-semibold">Alle Ankommenden werden mittels Antigen-Test und PCR-Test getestet, um sicherzustellen, dass es vor Ort nicht zu COVID-Ansteckungen kommt (positiv Getestete werden in einem Quarantäne-Quartier untergebracht)</p>
                                    <ul class="font-medium md:font-semibold">
                                        <li>Ein Notarzt oder Notärztin steht für medizinische Erstversorgung bereit</li>
                                        <li>Die Personen werden mit Lunch-Paketen und Getränken versorgt und erhalten Hygieneartikel sowie im Bedarfsfall Kleidung und Babynahrung</li>
                                        <li>Sollten Personen akut psychosoziale Leistungen benötigen, so werden sie vor Ort auch betreut. Im Ankunftszentrum wurde dazu eine behelfsmäßige Ordination errichtet.</li>
                                        <li>Die Personen können in Ruhe ankommen und sich von den Strapazen der Flucht erholen. Danach werden sie durch den Einsatzstab in Notquartieren untergebracht, in denen sie bis zur Vermittlung einer längerfristigen Unterbringung bleiben können.</li>
                                        <li>Es gibt erste Informationen, um sich in der Stadt zu orientieren</li>
                                        <li>Eine Kinderspielecke wird eingerichtet</li>
                                        <li>Einzelne Liegen stehen bereit, um sich auszurasten bzw. für Personen, die in der Nacht ankommen.</li>
                                        <li>WLAN steht in der Halle bereit</li>

                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white min-h-screen bg-left section-bg-left" style="background-image: url( {{ asset('images/wohnraum-bg-blue.svg    ') }}); background-size: 33.33%; background-repeat: repeat-y;">
        <div class="container py-24" id="apply">
            <div class="flex justify-end">
                <div class="w-full md:w-1/2 flex justify-end md:justify-center items-center ml-20 md:ml-0">
                    <div class="max-w-xl">
                        <div class="content">
                            <h1 x-show="show > 1"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90"
                                class="font-medium md:font-semibold">

                                @if(session('applocale') == 'uk')
                                    Інформація для людей з житлом.
                                @elseif(session('applocale') == 'en')
                                    Informations for persons with accommodation.
                                @else
                                    Informationen für Personen mit Unterbringung.
                                @endif
                            </h1>


                            <div class="font-medium md:font-semibold"
                                 x-show="show > 2"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-90"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-90">


                                @if(session('applocale') == 'uk')
                                    <p class="font-medium md:font-semibold">
                                        Люди, які вже проживають (наприклад, приватно, в готелях), можуть прийти в Austria Center у перші кілька днів після прибуття для первинної консультації, пошуку житла та доступу до основного сервісу.
                                    </p>

                                    <address class="font-medium md:font-semibold my-10">
                                        Консультаційний центр «Austria Center“<br>
                                        Юридичні/житлові консультації,<br>
                                        психологічна та соціально-медична підтримка та інше в Austria Center:<br>
                                        пн-пт з 8:00 до 18:00<br>
                                        22., Bruno-Kreisky-Platz 1
                                    </address>
                                @elseif(session('applocale') == 'en')
                                    <p class="font-medium md:font-semibold">
                                        Persons, who are already accommodated ( eg. in private housing or in hotels ) are invited to come to the Austria Center
                                        for a first consultation about imparting of permanent residence and applying to provision with basic supplies.
                                    </p>

                                    <address class="font-medium md:font-semibold my-10">
                                        Consultation office Austria Center Wien<br>
                                        Legal/accommodation consultation, psychological and  sociomedical support<br>
                                        etc. im Austria Center Wien:<br>
                                        Mo-Fr 08:00 - 18:00<br>
                                        22., Bruno-Kreisky-Platz 1
                                    </address>


                                @else
                                    <p class="font-medium md:font-semibold">
                                        Personen, die bereits (z.B. privat, in Hotels) untergebracht sind, können in den ersten Tagen nach Ankunft ins
                                        Austria Center für Erstberatung, Wohnraumvermittlung und Aufnahme in die Grundversorgung kommen
                                    </p>

                                    <address class="font-medium md:font-semibold my-10">
                                        Beratungsstelle Austria Center Wien<br>
                                        Rechts/Wohnberatung, psychologische u sozialmedizinische Unterstützung<br>
                                        etc. im Austria Center Wien:<br>
                                        Mo-Fr 08:00 - 18:00<br>
                                        22., Bruno-Kreisky-Platz 1
                                    </address>
                                @endif
                            </div>


                            <div class="font-medium md:font-semibold"
                                 x-show="show > 4" x-cloak
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 scale-90"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-300"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-90">

                                @if(session('applocale') == 'uk')
                                    <ul class="font-medium md:font-semibold">
                                        <li>Початкова консультація, уточнення подальших потреб та загальні соціальні консультації від Caritas Vienna та Віденського соціального фонду</li>
                                        <li>Роз'яснення потреб житла та його надання : уточнюється  чи є середня - чи довгострокова потреба, чи бажано надання проживання та догляду,  чи приватне житло.</li>
                                        <li>Людей інформують про загальні умови.  FSV та житлові консультанти Diakonie знаходяться на місці та надають житло.</li>
                                        <li>Психосоціальна допомога на місці за допомогою мобільної оперативної групи «Caritas».</li>
                                        <li>Соціально-медичні консультації та лікування AmberMed Diakonie.</li>
                                        <li>У Austria Center також є варіанти тестування та вакцинації</li>
                                    </ul>
                                    <p class="font-medium md:font-semibold">Можно приходити без попередньої реестраціі</p>
                                    <p class="font-medium md:font-semibold">З теплими вітаннями, повними впевненості та оптимізму, незважаючи на величезні виклики для Європи та світу</p>

                                @elseif(session('applocale') == 'en')
                                    <ul class="font-medium md:font-semibold">
                                        <li>First consultation, evaluation of further needs and general social counseling provided by Caritas Wien and Fonds Soziales Wien</li>
                                        <li>Clarification of requirement of accommodation and mediacy: the needed duration will be bespoken as well as the preferred kind of accommodation, eg private housing or assisted living.</li>
                                        <li>The framework conditions will be explained. The FSW and living counselor of Diakonie are at the site and faciliate living space.</li>
                                        <li>Psychosocial care is at the site represented by the mobile intervention team of Caritas</li>
                                        <li>Socialmedical counseling and treatment through AmberMed of Diakonie</li>
                                        <li>on person, as well as applying to provision with basic supplies for those living in private spaces.</li>
                                        <li>Covid test and vaccination is provided in the Austria Center</li>

                                    </ul>
                                    <p class="font-medium md:font-semibold">No appointments need to be scheduled.</p>
                                @else
                                    <ul class="font-medium md:font-semibold">
                                        <li>Erstberatung, Abklärung weiterer Bedürfnisse und allgemeine Sozialberatung durch Caritas Wien und Fonds Soziales Wien</li>
                                        <li>Abklärung des Wohnbedarfs und Wohnraumvermittlung: Liegt ein mittel- oder längerfristiger Bedarf vor, wird geklärt, ob eine organisierte Unterbringung und Betreuung oder eine private Unterkunft gewünscht wird.</li>
                                        <li>Die Menschen werden über die Rahmenbedingungen aufgeklärt. Der FSW und die Wohnberater:innen der Diakonie sind vor Ort und vermitteln Wohnraum.</li>
                                        <li>Psychosoziale Betreuung vor Ort durch das mobile Interventionsteam der Caritas</li>
                                        <li>Sozialmedizinische Beratung und Behandlung durch AmberMed der Diakonie</li>
                                        <li>der Personen, sowie deren Aufnahme in die Grundversorgung für privat Wohnende.</li>
                                        <li>Im Austria Center gibt es auch Test- & Impfmöglichkeit</li>

                                    </ul>
                                    <p class="font-medium md:font-semibold">Vermittlung: Personen können ohne Voranmeldung hingehen.</p>
                                @endif
                            </div>
                        </div>
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
        <x-donators/>
    </div>

    @if(\App\Models\Supporter::all()->count())
        <div class="container py-24 ">
            <div class="flex justify-center content mb-20">
                <h1>Wir danken für die Unterstützung</h1>
            </div>
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach(\App\Models\Supporter::all() as $supporter)
                    <div class="flex flex-col items-center justify-center">
                        @if($supporter->link)
                            <a href="{{ $supporter->link }}" target="_blank" class="flex flex-col items-center justify-center">
                                @endif
                                <img src="{{ $supporter->profile_photo_url }}" class="w-36 h-36 aspect-square object-cover rounded-full"/>
                                <h4 class="font-semibold text-xl text-center">{{ $supporter->name }}</h4>
                                @if($supporter->link)
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    @endif

</x-app-layout>

