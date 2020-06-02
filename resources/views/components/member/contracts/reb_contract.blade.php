<h2 class="text-center">Emisné podmienky dlhopisov</h2>

<p class="text-center">vedené centrálnym depozitárom cenných papierov Slovenskej Republiky</p>

<h2 class="text-center lang">The Terms of Bonds Issue</h2>

<p class="text-center lang">listed by Central Securities Depository of Slovak Republic</p>

<table class="details">
    <tr>
        <th>Emitent</th>

        <th>Záujemca</th>
    </tr>

    <tr>
        <td>
            <strong>Šírava Park, s.r.o.</strong><br>
            IČO: 52 028 461<br>
            Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
            Konanie menom spoločnosti: ?????, Directing Manager<br><br>
            E-mailová adresa: info@cee-realestate.com
        </td>

        <td>
            Celé meno: <strong>{{ $objOrder->name }}</strong> <strong>{{ $objOrder->surname }}</strong><br>
            Číslo OP: <strong>{{ $objOrder->government_id }}</strong><br>
            Trvalý pobyt: <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong><br>
            Región: <strong>{{ $objOrder->region }}</strong><br>
            Štát: <strong>{{ $objOrder->country }}</strong><br>
            Národnosť: <strong>{{ $objOrder->nationality }}</strong><br><br>
            E-mailová adresa: <strong>{{ $objOrder->email }}</strong>

            @if($objOrder->company)
                <br><br><strong>Údaje o spoločnosti</strong><br>
                Obchodné meno: <strong>{{ $objOrder->company->name }}</strong><br>
                IČO: <strong>{{ $objOrder->company->id_number }}</strong><br>
                Sídlo: <strong>{{ $objOrder->company->street }}</strong>, <strong>{{ $objOrder->company->city }}</strong>, <strong>{{ $objOrder->company->zip }}</strong><br>
                Región: <strong>{{ $objOrder->company->region }}</strong><br>
                Krajina: <strong>{{ $objOrder->company->country }}</strong>
            @endif

            @if($objOrder->joint)
                <br><br><strong>Spoločná zmluva s</strong><br>
                Celé meno: <strong>{{ $objOrder->joint->name }}</strong><br>
                Číslo OP: <strong>{{ $objOrder->joint->government_id }}</strong>
            @endif
        </td>
    </tr>

    <tr>
        <th>ďalej ako "Emitent"</th>

        <th>ďalej ako "Záujemca"</th>
    </tr>
</table>

<br>

<table class="details lang">
    <tr>
        <th>Issuer</th>

        <th>Bond holder</th>
    </tr>

    <tr>
        <td>
            <strong>Šírava Park, s.r.o.</strong><br>
            Company ID: 52 028 461<br>
            Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
            Represented by: ?????, Directing Manager<br><br>
            E-mail address: info@cee-realestate.com
        </td>

        <td>
            Full name: <strong>{{ $objOrder->name }}</strong> <strong>{{ $objOrder->surname }}</strong><br>
            Government ID: <strong>{{ $objOrder->government_id }}</strong><br>
            Permanent address: <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong><br>
            Region: <strong>{{ $objOrder->region }}</strong><br>
            Country: <strong>{{ $objOrder->country }}</strong><br>
            Nationality: <strong>{{ $objOrder->nationality }}</strong><br><br>
            E-mail address: <strong>{{ $objOrder->email }}</strong>

            @if($objOrder->company)
                <br><br><strong>Company details</strong><br>
                Company name: <strong>{{ $objOrder->company->name }}</strong><br>
                Company ID: <strong>{{ $objOrder->company->id_number }}</strong><br>
                Seat: <strong>{{ $objOrder->company->street }}</strong>, <strong>{{ $objOrder->company->city }}</strong>, <strong>{{ $objOrder->company->zip }}</strong><br>
                Region: <strong>{{ $objOrder->company->region }}</strong><br>
                Country: <strong>{{ $objOrder->company->country }}</strong>
            @endif

            @if($objOrder->joint)
                <br><br><strong>Joint details</strong><br>
                Full name: <strong>{{ $objOrder->joint->name }}</strong><br>
                Government ID: <strong>{{ $objOrder->joint->government_id }}</strong>
            @endif
        </td>
    </tr>

    <tr>
        <th>the "Issuer"</th>

        <th>the "Bond holder"</th>
    </tr>
</table>

<br>

<table class="details">
    <tr>
        <th colspan="2">
            Informácie o dlhopisoch
        </th>
    </tr>

    <tr>
        <td>
            Celková hodnota dlhopisov
        </td>

        <td>
            € <strong>{{ number_format($objOrder->reb->number * 10000, 0, ',', ' ') }}</strong>
        </td>
    </tr>

    <tr>
        <td>
            Celkový úrok
        </td>

        <td>
            € <strong>{{ number_format($objOrder->reb->number * 10000 * ($objOrder->reb->percentage() / 100) * $objOrder->reb->duration, 0, ',', ' ') }}</strong>
        </td>
    </tr>

    <tr>
        <td>
            Výška splátky úroku
        </td>

        <td>
            € <strong>{{ number_format($objOrder->reb->number * 10000 * ($objOrder->reb->percentage() / 100), 0, ',', ' ') }}</strong>
        </td>
    </tr>

    <tr>
        <td>
            Dlhopisy ({{ $objOrder->reb->number }})
        </td>

        <td>
            @foreach($objOrder->reb->serials as $objSerial)
                <strong>{{ \App\Classes\RomanNumber::integerToRoman($objSerial->bond) }}-{{ $objSerial->series }}{{ sprintf('%03d', $objSerial->number) }}</strong>,
            @endforeach
        </td>
    </tr>

    <tr>
        <td>
            Názov dlhopisu
        </td>

        <td>
            CEE Real Estate BOND {{ \App\Classes\RomanNumber::integerToRoman($objOrder->reb->serials[0]->bond) }} SERIES {{ $objOrder->reb->serials[0]->series }}
        </td>
    </tr>

    <tr>
        <td>
            Druh, forma a podoba cenného papiera
        </td>

        <td>
            dlhopis na meno v listinnej podobe
        </td>
    </tr>

    <tr>
        <td>
            Mena a menovitá hodnota dlhopisu
        </td>

        <td>
            10.000,- EUR<br>
            (desaťtisíc eúr)
        </td>
    </tr>

    <tr>
        <td>
            Minimálny počet dlhopisov pre jednu kúpu
        </td>

        <td>
            10 kusov. Na ponuky na kúpu menšieho počtu kusov Emitent nebude prihliadať.
        </td>
    </tr>

    <tr>
        <td>
            Emisný kurz
        </td>

        <td>
            100 % z menovitej hodnoty dlhopisu
        </td>
    </tr>

    <tr>
        <td>
            Dátum začiatku vydávania dlhopisov
        </td>

        <td>
            ???
        </td>
    </tr>

    <tr>
        <td>
            Predpokladaná doba vydávania dlhopisov
        </td>

        <td>
            ???
        </td>
    </tr>

    <tr>
        <td>
            Schválenie emisie
        </td>

        <td>
            Emisia bola schválená valným zhromaždením emitenta zo dňa {{ date('j.n.Y') }}
        </td>
    </tr>

    <tr>
        <td>
            Dátum emisie
        </td>

        <td>
            ???
        </td>
    </tr>

    <tr>
        <td>
            Platobné miesto
        </td>

        <td>
            Sídlo emitenta
        </td>
    </tr>

    <tr>
        <td>
            Termín výplaty výnosov
        </td>

        <td>
            ???
        </td>
    </tr>

    <tr>
        <td>
            Schôdza majiteľov dlhopisov
        </td>

        <td>
            Schôdza majiteľov dlhopisov sa nezriaďuje.
        </td>
    </tr>
</table>

<br>

<table class="details lang">
    <tr>
        <th colspan="2">
            Bond information
        </th>
    </tr>

    <tr>
        <td>
            Total Bond(s) value
        </td>

        <td>
            € <strong>{{ number_format($objOrder->reb->number * 10000, 0, ',', ' ') }}</strong>
        </td>
    </tr>

    <tr>
        <td>
            Total amount of the interest
        </td>

        <td>
            € <strong>{{ number_format($objOrder->reb->number * 10000 * ($objOrder->reb->percentage() / 100) * $objOrder->reb->duration, 0, ',', ' ') }}</strong>
        </td>
    </tr>

    <tr>
        <td>
            Yearly amount of the interest payment
        </td>

        <td>
            € <strong>{{ number_format($objOrder->reb->number * 10000 * ($objOrder->reb->percentage() / 100), 0, ',', ' ') }}</strong>
        </td>
    </tr>

    <tr>
        <td>
            Bond(s) ({{ $objOrder->reb->number }})
        </td>

        <td>
            @foreach($objOrder->reb->serials as $objSerial)
                <strong>{{ \App\Classes\RomanNumber::integerToRoman($objSerial->bond) }}-{{ $objSerial->series }}{{ sprintf('%03d', $objSerial->number) }}</strong>,
            @endforeach
        </td>
    </tr>

    <tr>
        <td>
            Title of bond
        </td>

        <td>
            CEE Real Estate BOND {{ \App\Classes\RomanNumber::integerToRoman($objOrder->reb->serials[0]->bond) }} SERIES {{ $objOrder->reb->serials[0]->series }}
        </td>
    </tr>

    <tr>
        <td>
            Type and form of the security
        </td>

        <td>
            Registered bond in a paper form
        </td>
    </tr>

    <tr>
        <td>
            Currency and nominal value (face value) of the bond
        </td>

        <td>
            10.000,- EUR<br>
            (ten thousand euros)
        </td>
    </tr>

    <tr>
        <td>
            Minimum number of bonds per purchase
        </td>

        <td>
            10 bonds. The Issuer does not take regard of lower bids.
        </td>
    </tr>

    <tr>
        <td>
            Issue price
        </td>

        <td>
            100% of the nominal value (face value) of the bond
        </td>
    </tr>

    <tr>
        <td>
            Bond issue start date
        </td>

        <td>
            ???
        </td>
    </tr>

    <tr>
        <td>
            Estimated bond issue time
        </td>

        <td>
            ???
        </td>
    </tr>

    <tr>
        <td>
            Approval of the issue
        </td>

        <td>
            The issue was approved by the General Meeting of the Issuer on {{ date('j.n.Y') }}
        </td>
    </tr>

    <tr>
        <td>
            Date of issue
        </td>

        <td>
            ???
        </td>
    </tr>

    <tr>
        <td>
            Place of payment
        </td>

        <td>
            Registered office of the Issuer
        </td>
    </tr>

    <tr>
        <td>
            Payout day
        </td>

        <td>
            ???
        </td>
    </tr>

    <tr>
        <td>
            Meeting of bondholders
        </td>

        <td>
            The meeting of bondholders was not established.
        </td>
    </tr>
</table>

<h3 class="text-center">Účel dlhopisu</h3>

<ol>
    <li>Dlhopis je určený na financovanie krátkodobých a dlhodobých realitných projektov Emitenta, a to najmä vo vzťahu k akvizíciám už vybraných nehnuteľností a na financovanie ich následnej výstavby, alebo rekonštrukcie. Emitent súčasne Dlhopisom investuje aj do akvizície portfólia Emitenta s nehnuteľnosťami.</li>

    <li>Emitent prehlasuje, že peňažné prostriedky každého majiteľa Dlhopisov vydaných na základe týchto emisných podmienok zverí osobitne zriadenej dcérskej spoločnosti Emitenta, ktorej Emitent bude 100% vlastníkom a ktorá bude separátne investovať do vybraných realitných projektov tejto dcérskej spoločnosti Emitenta. Takýmto spôsobom Emitent zabezpečí transparentnosť a oddeliteľnosť peňažných zdrojov majiteľa Dlhopisov od peňažných zdrojov iných majiteľov Dlhopisov vydaných na základe týchto emisných podmienok.</li>

    <li>Dôvodmi vyššie opísaného postupu je, tá skutočnosť, že vybraný realitný projekt dcérskej spoločnosti Emitenta nebude financovaný len zo zdrojov majiteľa dlhopisov, ale súčasne bude financovaný aj zo zdrojov bankového úveru, ktorý bude poskytnutý na konkrétny realitný projekt dcérskej spoločnosti Emitenta. Takýmto spôsobom zabezpečí Emitent prostredníctvom svojej dcérskej spoločnosti transparentný a výhodný spôsob financovania konkrétneho realitného projektu a tým zvýši profitabilitu daného realitného projektu v nadväznosti na čo sa zvyšuje garancia udržateľných výnosov z Dlhopisov vydaných na základe týchto emisných podmienok.</li>

    <li>Emitent prehlasuje, že peňažné prostriedky poskytnuté na základe Dlhopisov vydaných na základe týchto emisných podmienok bude investovať oddelene len prostredníctvom svojich dcérskych spoločností do realitných projektov v rámci Európskej únie a to v regióne strednej Európy a/alebo s tým súvisiacou prevádzkovú činnosťou Emitenta v rátane marketingu alebo propagácie služieb Emitenta.</li>

    <li>Emitent prehlasuje, že vždy bude prostredníctvom svojich dcérskych spoločností investovať len do takých realitných projektov, ktoré vykazujú znaky úplnej a rýchlej návratnosti investície. Emitent má výlučnú právomoc na stanovenie svojej investičnej politiky v oblasti nehnuteľností a realitných projektov.</li>

    <li>Emitent si vyhradzuje právo použiť peňažné prostriedky z dlhopisov aj na iné účely, a to najmä na úhradu vlastných prevádzkových nákladov potrebných na chod spoločnosti Emitenta alebo na marketingové účely súvisiacu s realitnými projektmi Emitenta a jeho dcérskych spoločností.</li>
</ol>

<h3 class="text-center lang">Purpose of the bond</h3>

<ol class="lang">
    <li>The bond is to finance Issuer's short-term and long-term real estate projects, in particular the already selected real estate as well as the construction or renovation of the selected real estate. The Issuer shall also use the bonds to acquire the real estate portfolio.</li>

    <li>The Issuer declares that the funds of each bondholder under these Terms will be entrusted to a subsidiary specially established and owned by the Issuer (100% of shares). This subsidiary will independently invest in the selected real estate projects of the Issuer. In this way, the Issuer will ensure that the bondholder's finances are transparent and separated from the finances of other bondholders under these Terms.</li>

    <li>The selected real estate project of the Issuer's subsidiary will be financed not only through the bonds but also through a loan granted by a bank for a particular real estate project of the Issuer's subsidiary. In this way, the Issuer, through its subsidiary, secures a transparent and advantageous financing for the real estate project, thereby increasing the profitability of the real estate project and guaranteeing sustainable bond yields under these Terms.</li>

    <li>The Issuer declares that the funds provided through the bonds issued under these Terms will be invested in real estate projects within the European Union, in particular the Central Europe region, and/ or in the related business activities of the Issuer including marketing or promotion activities. The activities under the preceding sentence shall be carried out only through Issuer’s subsidiaries.</li>

    <li>The Issuer declares that it will invest through its subsidiaries only in real estate projects that show signs of full and quick return on investment. The Issuer has exclusive competence to determine its investment policy regarding its real estate projects.</li>

    <li>The Issuer reserves the right to use finances from the bonds for other purposes as well, in particular to cover its own operating expenses necessary for its business activities or marketing activities related to the real estate projects in question.</li>
</ol>

<h3 class="text-center">Spôsob určenia výnosu</h3>

<p>Výnos je určený pevnou úrokovou sadzbou vo výške {{ $objOrder->reb->percentage() }}% p.a. z menovitej hodnoty dlhopisu do dátumu splatnosti menovitej hodnoty. Úrokový výnos sa platí majiteľovi dlhopisu odo dňa vydania listinného dlhopisu majiteľovi dlhopisu do dátumu splatenia menovitej hodnoty dlhopisu. Úrokový výnos je počítaný spôsobom: skutočný počet dní vlastníctva dlhopisu / 365. Úrokovým obdobím je obdobie začínajúce dátumom emisie do termínu výplaty výnosu.</p>

<h3 class="text-center lang">Yield determination method</h3>

<p class="lang">The yield is determined by a fixed interest rate (yield) of {{ $objOrder->reb->percentage() }}% p.a. of the bond’s nominal value (face value) for each year (or part thereof) till the maturity date. The yield is paid to the bondholder and is calculated for the period from the date the bond was issued to the bondholder in the paper note until the maturity of the bond. The yield is calculated as follows: actual number of days of bond ownership / 365. The interest period is the period commencing on the date of bond issue until the maturity.</p>

<h3 class="text-center">Spôsob výplaty výnosov</h3>

<p>Emitent sa zaväzuje splatiť úrokový výnos k termínu splatnosti bezhotovostným prevodom na bankový účet majiteľa dlhopisu, ktorý sa preukáže 3 (tri) pracovné dni pred dňom splatnosti úrokového výnosu predložením dlhopisu na nahliadnutie Emitentovi ako majiteľ dlhopisu; zároveň majiteľ dlhopisu písomne oznámi Emitentovi číslo účtu, na ktorý má byť úrokový výnos vyplatený, ak žiada výnos vyplatiť na iné číslo účtu, než majiteľ uviedol v zmluve o kúpe dlhopisu.</p>

<h3 class="text-center lang">Method of payment</h3>

<p class="lang">The Issuer undertakes to pay up the interest on the bond on the maturity date by wire transfer to the bank account of the bondholder. The bondholder should provide the Issuer with the bond in question for inspection 3 (three) business days prior to the maturity date; at the same time, the bondholder shall notify the Issuer in writing of the account number to which the yield is to be paid if he requests the interest to be paid to another account number than the bondholder has indicated in the bond purchase agreement.</p>

<h3 class="text-center">Dátum splatnosti menovitej hodnoty</h3>

<p>Menovitá hodnota dlhopisu bude splatená jednorazovo do {{ $objOrder->reb->duration * 12 }} mesiacov odo dňa začiatku vydávania dlhopisov. K dátumu splatenia menovitej hodnoty dlhopisu prestáva byť dlhopis úročený.</p>

<h3 class="text-center lang">Maturity date of the nominal value (face value)</h3>

<p class="lang">The nominal value (face value) of the bond will be redeemed on a one-off basis within {{ $objOrder->reb->duration * 12 }} months of the bond issue date. At the date of the face value repayment the bond ceases to bear interest.</p>

<h3 class="text-center">Vyhlásenia emitenta</h3>

<p>Emitent vyhlasuje, že dlhuje menovitú hodnotu dlhopisov majiteľom dlhopisov, a zároveň sa zaväzuje splatiť menovitú hodnotu dlhopisov a vyplácať úrokový výnos v termínoch podľa týchto emisných podmienok.</p>

<h3 class="text-center lang">Issuer’s statement</h3>

<p class="lang">The Issuer declares that it owes the nominal value (face value) of the bonds to the bondholders and, at the same time, undertakes to repay the nominal value (face value) of the bonds and to pay the yield under these Terms.</p>

<h3 class="text-center">Upozornenia pre majiteľa dlhopisu</h3>

<ol>
    <li>V súlade s deklarovaným účelom použitia peňažných prostriedkov za akým sú dlhopisy podľa týchto emisných podmienok vydávané emitent upozorňuje budúcich majiteľov dlhopisu, že investovanie do nehnuteľností (kúpa/predaj), realitných projektov (výstavba/rekonštrukcia) sú vo všeobecnosti činnosťami s ktorými sú vždy spojené určité riziká a to najmä riziká  lokálne, národné a medzinárodné ekonomické podmienky; ponuka a dopyt po nehnuteľnostiach; finančné schopnosti nájomcov nehnuteľností, kupujúcich a predávajúcich; zmeny v úrokových mierach, zmeny v právnych predpisoch regulujúcich životné prostredie, zmeny právnej regulácie v oblasti plánovania výstavby a iné verejnoprávne zásahy ako aj zmeny fiskálnej a monetárnej politiky, zmeny spojené s právnym, regulačným a daňovým prostredím, zmeny sadzieb daní z nehnuteľností, právne vady nehnuteľností, negatívne zmeny ekonomiky, spojené s prepadom cestovného ruchu a poklesom maloobchodu; nepredvídateľné straty; vplyv vyššej moci, teroristické udalosti, straty ktoré neboli poistené alebo neboli poistiteľné; a iné faktory, ktoré nebolo možné odvrátiť ani pri vynaložení dostatočnej odbornej starostlivosti manažmentu.</li>

    <li>Okrem vyššie uvedených rizík by majiteľ dlhopisu mal brať na vedomie, že hodnota nehnuteľností podlieha dlhodobým cyklickým trendom, ktoré spôsobujú značnú cenovú nestálosť (volatilitu). Koncentrované investovanie do nehnuteľností a investície zabezpečené nehnuteľnosťami sú vystavené vyššie špecifikovaným rizikám bez možnosti rozloženia rizík, pretože nejde o kolektívne investovanie v zmysle osobitných právnych predpisov.</li>

    <li>Investovanie do nehnuteľností je z dôvodu koncentrácie v tomto špecifickom odvetví, oblasti resp. v geografickej lokalite vystavené vyššiemu trhovému riziku. Investície do nehnuteľností môžu podliehať najmä rizikám poklesu cenovej hladiny nehnuteľností, rizikám spojenými so všeobecnými a ekonomickými podmienkami trhu, zmeny hodnoty nehnuteľností, ktoré kryjú realitnú investíciu a nesplácaním úverov od dlžníkov. Hodnota investície a príjmy z nej môžu kolísať a Vaša investícia nie je garantovaná.</li>

    <li>Majiteľ dlhopisu by mal brať na vedomie, že predošlé zisky Emitenta nie sú zárukou budúcich výnosov a taktiež, že investovanie na zahraničných trhoch podlieha špecifickým rizikám cudzej meny, ako aj politickým a ekonomickým rizikám. Výmenné kurzy môžu spôsobiť, že hodnota podkladových zahraničných investícií klesne alebo stúpne.</li>

    <li>Investície v rozvíjajúcich sa trhoch môžu byť z dôvodu makroekonomickej alebo politickej situácie nestálejšie ako na iných trhoch čo predstavuje zvýšené riziko pre kapitál investovaný majiteľom dlhopisu, a teda aj uvedené skutočnosti môže ovplyvniť skutočnú hodnotu dlhopisu.</li>
</ol>

<h3 class="text-center lang">Warnings for the bondholder</h3>

<ol class="lang">
    <li>In accordance with the stated purpose of using the funds for which the bonds were issued under these Termss, the Issuer advises and warns future bondholders that real estate investments (purchase / sale), real estate projects (construction / renovation) are generally the activities connected with certain risks, in particular the risks associated with constantly changing local, national and international economic conditions; supply and demand for real estate; the financial capacity of tenants, buyers and sellers; changes in interest rates; changes in environmental regulations; changes in legal regulations in the field of construction planning; and other public interventions as well as changes in fiscal and monetary policy; changes in legal, regulatory and tax environment; changes in real estate tax rates; legal defects regarding real estate; negative economic changes coupled with a decline in tourism and a drop in retail sales; unforeseen losses; the effects of force majeure; terrorist incidents; losses not covered by insurance policy or events that are insurable; and other factors that could not be averted even when exercising due diligence.</li>

    <li>In addition to the above risks, the bondholder should note that the value of real estate is subject to long-term cyclical trends that cause considerable price volatility. Concentrated real estate investments and real estate-backed investments are exposed to the above specified risk, as such investment is not considered a collective investment under specific legislation.</li>

    <li>Investing in real estate is due to the concentration in this specific sector (or in a geographical location) exposed to a higher market risk. Real estate investments may be subject, in particular, to the risks of falling real estate prices, risks associated with the general and economic market conditions, changes in the value of real estate that are subject to real estate investments and non-repayment of loans. The value of your investment and your earnings may fluctuate and your investment or yield thereof is not guaranteed.</li>

    <li>The bondholder should note that the previous profits of the Issuer are not a guarantee of future earnings, and also that foreign investment is subject to the specific risks of the foreign currency, as well as political and economic risks. Exchange rates may cause the value of the underlying foreign investment to fall or rise.</li>

    <li>Investments in emerging markets may be more volatile due to the macroeconomic or political situation than those in other markets, which poses an increased risk to the capital invested by the bondholder, and therefore the aforementioned facts may affect the true value of the bond.</li>
</ol>

<h3 class="text-center">Spôsob vydania dlhopisu</h3>

<p>Dlhopisy budú vydávané na základe ponuky bez predchádzajúceho zverejnenia schváleného prospektu cenného papiera v súlade s § 120 ods. 1 a 3 písm. c) Zákona o CP. Dlhopisy sú určené obmedzenému okruhu osôb najviac 149 osobám, ktorým budú dlhopisy zo strany emitenta vydané po tom čo si ich vydanie osobitne u emitenta objednali. Emitent nestanovil minimálnu výšku pre úspešnosť emisie dlhopisov. Vydanie listinného dlhopisu majiteľovi dlhopisu sa uskutoční do 3 (troch) pracovných dní odo dňa pripísania kúpnej ceny dlhopisu na účet Emitenta, a to zaslaním dlhopisu poštou na adresu majiteľa. Deň odoslania dlhopisu na poštovú prepravu sa považuje za deň vydania dlhopisu majiteľovi.</p>

<h3 class="text-center lang">Bond issue method</h3>

<p class="lang">Bonds will be issued on the basis of an offer without prior publication of an approved prospectus in accordance with Art. 120, par. 1 and par. 3 c of the Act on Securities. Bonds are intended for a limited number of people, maximum of 149 persons who will be issued the bonds after the bonds have been ordered from the Issuer. The Issuer has not set a minimum amount for the success of the bond issue. The bondholder shall be issued a bond within 3 (three) business days of the day the bond purchase price was credited to the Issuer's account. The bond is to be sent via post to the address of the bondholder. The posting date of the bond is considered the date of issue of the bond to the bondholder.</p>

<h3 class="text-center">Prevoditeľnosť</h3>

<p>Len s predchádzajúcim súhlasom emitenta. Majiteľ je oprávnený previesť dlhopis rubopisom iba s predchádzajúcim písomným súhlasom Emitenta inak je taký prevod dlhopisu neplatný. Predchádzajúci Majiteľ je Emitentovi povinný písomne oznámiť prevod dlhopisu, s ktorým Emitent súhlasil, najneskôr do 3 dní odo dňa kedy sa taký prevod uskutočnil.</p>

<h3 class="text-center lang">Transfer of bonds</h3>

<p class="lang">Bonds may be transferred only with the prior consent of the Issuer. The bondholder is entitled to transfer the bond only with the prior written consent of the Issuer. Otherwise, such a transfer is deemed invalid. The previous bondholder is obliged to notify the Issuer in writing of the transfer of the bond to which the Issuer has agreed not later than 3 days after the date of such transfer.</p>

<h3 class="text-center">Obchodovateľnosť</h3>

<p>Žiadosť na prijatie dlhopisov na obchodovanie na regulovanom trhu nebude podaná.</p>

<h3 class="text-center lang">Marketability</h3>

<p class="lang">No application for admission of bonds to trading on a regulated market will be filed.</p>

<h3 class="text-center">Spôsob zabezpečenia finančných prostriedkov na úhradu dlhopisov</h3>

<p>Emitent zabezpečí vyplatenie výnosov z dlhopisov a splatenie menovitej hodnoty dlhopisu z svojej podnikateľskej činností v súlade so svojim predmetom činnosti zapísaným v obchodnom registri.</p>

<h3 class="text-center lang">A method of securing funds for the payment of bonds</h3>

<p class="lang">The Issuer shall ensure the payment of the bond yield and the repayment of the nominal value (face value) of the bond from its business activities in accordance with its scope of business registered in the Business Register.</p>

<h3 class="text-center">Ostatné podmienky</h3>

<p>Výplata výnosov bude realizovaná aj na diaľku bez potreby fyzického dostavenia sa majiteľa dlhopisu do sídla Emitenta. Výplata výnosov bude majiteľovi uskutočnená po preukázaní fyzickej držby dlhopisu prostriedkami diaľkovej komunikácie.</p>

<h3 class="text-center lang">Other requirements</h3>

<p class="lang">The yield payment shall also be carried out without the need for a bondholder to be physically present at the Issuer's registered office. The bondholder is entitled to submit his bonds via means of distance communication.</p>

<h3 class="text-center">Rozhodné právo a výklad</h3>

<p>Práva a záväzky vyplývajúce z dlhopisov vydaných na základe týchto emisných podmienok sa budú riadiť a vykladať podľa právnych predpisov Slovenskej republiky. Emitent a majiteľ súhlasia s tým, že súdnu právomoc na prerokovanie a rozhodovanie o akýchkoľvek sporoch, úkonoch alebo konaniach, a na urovnanie akýchkoľvek sporov, ktoré môžu vzniknúť na základe alebo v súvislosti s týmito dlhopismi majú slovenské súdy a Emitent sa na tieto účely podriaďuje súdnej právomoci týchto súdov.</p>

<h3 class="text-center lang">Applicable law and interpretation</h3>

<p class="lang">Rights and obligations arising from bonds issued under these Terms shall be governed and construed in accordance with the laws of the Slovak Republic. The Issuer and the bondholder agree that only courts of the Slovak Republic may preside over, hear and settle any disputes that may arise in connection with these bonds, and the Issuer is subject to the judicial jurisdiction of those courts.</p>

<p class="lang">The Terms were drawn up in the Slovak language and may be translated into other languages. In case of inconsistencies between the different language versions, the Slovak version shall prevail.</p>

<h3 class="text-center">Sprístupnenie</h3>

<p>Tieto emisné podmienky dlhopisov budú sprístupnené v súlade s § 3 ods. 7 Zákona o dlhopisoch na webovej stránke Emitenta.</p>

<h3 class="text-center lang">Disclosure</h3>

<p class="lang">The Terms shall be made available in accordance with Art. 3 par. 7 of the Bonds Act on the Issuer's website.</p>

{{--<div class="break"></div>--}}

<p><strong>UPOZORNENIE: Tieto emisné podmienky dlhopisov nie sú akýmkoľvek oznámením, odporúčaním, iným textom alebo konaním podľa § 120 Zákona o CP, ktorým sa rozumie verejná ponuka cenných papierov spojená so zverejnením prospektu podľa § 120 ods. 2 Zákona o CP.</strong></p>

<p class="lang"><strong>NOTE: These Terms shall not constitute any announcement, recommendation or any other text or procedure under Art. 120 of the Securities Act which would constitute a public offer of securities associated with the publication of a prospectus pursuant to Art. 120, par. 2 of the Securities Act.</strong></p>

<table class="signatures">
    <tr>
        <td>
            V Bratislave, dňa {{ date('j.n.Y') }}<br>
            Za dlžníka:<br><br>

            <span class="lang">
                In Bratislava, on {{ date('j.n.Y') }}<br>
                On behalf of the Debtor:
            </span>
        </td>

        <td>
            V Bratislave, dňa {{ date('j.n.Y') }}<br>
            Za veriteľa:<br><br>

            <span class="lang">
                In Bratislava, on {{ date('j.n.Y') }}<br>
                On behalf of the Creditor:
            </span>
        </td>
    </tr>

    <tr>
        <td class="signature">
            DSS2........................................<br>
            ?????<br>
            Managing Director<br>
            Šírava Park, s.r.o.
        </td>

        <td class="signature">
            DSS1........................................<br>
            {{ $objOrder->name }} {{ $objOrder->surname }}
            @if(isset($objOrder->company))
                <br>{{ $objOrder->company->name }}
            @endif
        </td>
    </tr>
</table>