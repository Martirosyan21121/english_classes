<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Translation App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
            margin-bottom: 40px;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }

        .hidden {
            display: none;
        }

        button {
            margin-right: 10px;
            padding: 5px 10px;
        }

        @media (max-width: 792px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<h2>English - Armenian Word List</h2>

<button id="b1">Hide English</button>
<button id="b2">Hide Armenian</button>

<table>
    <thead>
    <tr>
        <th class="col-en">English</th>
        <th class="col-hy">Armenian</th>
    </tr>
    </thead>
    <tbody>
    <tr><td class="col-en">describe</td><td class="col-hy">նկարագրել</td></tr>
    <tr><td class="col-en">Tip (tips and tricks)</td><td class="col-hy">Հուշում, օգնություն</td></tr>
    <tr><td class="col-en">sociable</td><td class="col-hy">շփվող</td></tr>
    <tr><td class="col-en">Advice (to give advice, to receive advice)</td><td class="col-hy">խորհուրդ</td></tr>
    <tr><td class="col-en">Smart = intelligent</td><td class="col-hy">խելացի</td></tr>
    <tr><td class="col-en">Much advice (uncountable)</td><td class="col-hy">Շատ խորհուրդներ</td></tr>
    <tr><td class="col-en">Reluctant = unwilling</td><td class="col-hy">Չուզեցող, դժվարությամբ ինչ-որ բան անող</td></tr>
    <tr><td class="col-en">graduation</td><td class="col-hy">Ավարտական միջոցառում</td></tr>
    <tr><td class="col-en">selective</td><td class="col-hy">Տարբերություն դնող</td></tr>
    <tr><td class="col-en">justify</td><td class="col-hy">արդարացնել</td></tr>
    <tr><td class="col-en">honest</td><td class="col-hy">ազնիվ</td></tr>
    <tr><td class="col-en">Get used to = admit</td><td class="col-hy">Հարմարվել, ընդունել ինչպես կա</td></tr>
    <tr><td class="col-en">stubborn</td><td class="col-hy">համառ</td></tr>
    <tr><td class="col-en">reject</td><td class="col-hy">մերժել</td></tr>
    <tr><td class="col-en">willing</td><td class="col-hy">պատրաստակամ</td></tr>
    <tr><td class="col-en">deny</td><td class="col-hy">ժխտել</td></tr>
    <tr><td class="col-en">hardworking</td><td class="col-hy">աշխատասեր</td></tr>
    <tr><td class="col-en">Wake up = get up</td><td class="col-hy">արթնանալ</td></tr>
    <tr><td class="col-en">extrovert</td><td class="col-hy">շփվող</td></tr>
    <tr><td class="col-en">habit</td><td class="col-hy">սովորություն</td></tr>
    <tr><td class="col-en">Introvert</td><td class="col-hy">Չշփվող, փակ</td></tr>
    <tr><td class="col-en">flow</td><td class="col-hy">հոսք</td></tr>
    <tr><td class="col-en">calm</td><td class="col-hy">հանգիստ</td></tr>
    <tr><td class="col-en">User flow</td><td class="col-hy">Օգտատերերի հոսք</td></tr>
    <tr><td class="col-en">delicate</td><td class="col-hy">նրբանկատ</td></tr>
    <tr><td class="col-en">disturb</td><td class="col-hy">անհանգստացնել</td></tr>
    <tr><td class="col-en">agree</td><td class="col-hy">համաձայնվել</td></tr>

    <!-- New Words -->
    <tr><td class="col-en">unusual</td><td class="col-hy">անսովոր</td></tr>
    <tr><td class="col-en">realize</td><td class="col-hy">Գիտակցել; իրականցնել</td></tr>
    <tr><td class="col-en">habit</td><td class="col-hy">սովորություն</td></tr>
    <tr><td class="col-en">realized</td><td class="col-hy">Գիտակցեցի; իրականացրեցի</td></tr>
    <tr><td class="col-en">Question 4 = the 4th question</td><td class="col-hy">Հարց 4 - 4րդ հարց</td></tr>
    <tr><td class="col-en">To be realized</td><td class="col-hy">իրականացված</td></tr>
    <tr><td class="col-en">mistery</td><td class="col-hy">առեղծված</td></tr>
    <tr><td class="col-en">stability</td><td class="col-hy">կայունություն</td></tr>
    <tr><td class="col-en">Custom = tradition</td><td class="col-hy">Սովորույթ, ավանդույթ</td></tr>
    <tr><td class="col-en">tell</td><td class="col-hy">պատմել</td></tr>
    <tr><td class="col-en">costume</td><td class="col-hy">կոստյում</td></tr>
    <tr><td class="col-en">goal</td><td class="col-hy">նպատակ</td></tr>
    <tr><td class="col-en">expect</td><td class="col-hy">ակնկալել</td></tr>
    <tr><td class="col-en">wish</td><td class="col-hy">երազանք</td></tr>
    <tr><td class="col-en">Ի - except</td><td class="col-hy">բացի</td></tr>
    <tr><td class="col-en">To be connected</td><td class="col-hy">Կապված լինել</td></tr>
    <tr><td class="col-en">Ը - accept</td><td class="col-hy">ընդունել</td></tr>
    <tr><td class="col-en">My goals were connected to</td><td class="col-hy">Իմ նպատակները կապված էին</td></tr>
    <tr><td class="col-en">since</td><td class="col-hy">Քանի որ</td></tr>
    <tr><td class="col-en">get-got-gotten</td><td class="col-hy">Ստանալ, դառնալ</td></tr>
    <tr><td class="col-en">precious</td><td class="col-hy">թանկարժեք</td></tr>
    <tr><td class="col-en">Get older</td><td class="col-hy">Դառնալ մեծ՝ մեծանալ</td></tr>
    <tr><td class="col-en">dear</td><td class="col-hy">Թանկագին, հարազատ</td></tr>
    <tr><td class="col-en">Get engaged</td><td class="col-hy">նշանադրվել</td></tr>
    <tr><td class="col-en">expensive</td><td class="col-hy">Թանկ արժեցող՝ գնով թանկ</td></tr>
    <tr><td class="col-en">Better job</td><td class="col-hy">Ավելի լավ աշխատանք</td></tr>
    <tr><td class="col-en">Pit = kernel = stone = core</td><td class="col-hy">կորիզ</td></tr>
    <tr><td class="col-en">High salary</td><td class="col-hy">Բարձր աշխատավարձ</td></tr>
    <tr><td class="col-en">Once</td><td class="col-hy">Մի անգամ</td></tr>
    <tr><td class="col-en">Set goals</td><td class="col-hy">Նպատակ դնել</td></tr>
    <tr><td class="col-en">twice</td><td class="col-hy">Երկու անգամ</td></tr>
    <tr><td class="col-en">High five</td><td class="col-hy">Թխի գա</td></tr>
    <tr><td class="col-en">3+...+times</td><td class="col-hy">3 անգամ․․․4 անգամ</td></tr>
    <tr><td class="col-en">penetrate</td><td class="col-hy">Թափանցել, ծակել անցնել</td></tr>
    <tr><td class="col-en">survey</td><td class="col-hy">հետազոտություն</td></tr>
    <tr><td class="col-en">whose</td><td class="col-hy">Ումն է</td></tr>
    <tr><td class="col-en">survive</td><td class="col-hy">գոյատևել</td></tr>
    <tr><td class="col-en">whom</td><td class="col-hy">Տալ ո՞ւմ</td></tr>

    <!--    3rd week words -->
    <tr><td class="col-en">-How are you?</td><td class="col-hy">-Ինչպե՞ս ես։</td></tr>
    <tr><td class="col-en">-So-so = as all that</td><td class="col-hy">-ոչինչ (յոլա)</td></tr>
    <tr><td class="col-en">worm</td><td class="col-hy">ճիճու</td></tr>
    <tr><td class="col-en">rare</td><td class="col-hy">հազվագյուտ</td></tr>
    <tr><td class="col-en">lie</td><td class="col-hy">սուտ</td></tr>
    <tr><td class="col-en">To lie = to tell lies</td><td class="col-hy">Սուտ ասել, ստել</td></tr>
    <tr><td class="col-en">skill</td><td class="col-hy">հմտություն</td></tr>
    <tr><td class="col-en">patience</td><td class="col-hy">համբերություն</td></tr>
    <tr><td class="col-en">To be patient</td><td class="col-hy">Լինել համբերատար</td></tr>
    <tr><td class="col-en">No matter</td><td class="col-hy">Կապ չունի, անկախ նրանից․․․</td></tr>
    <tr><td class="col-en">so-called</td><td class="col-hy">Այսպես կոչված</td></tr>
    <tr><td class="col-en">Have no = don’t have</td><td class="col-hy">չունենալ</td></tr>
    <tr><td class="col-en">negotiate</td><td class="col-hy">բանակցել</td></tr>
    <tr><td class="col-en">well-known</td><td class="col-hy">հայտնի</td></tr>
    <tr><td class="col-en">spontaneous</td><td class="col-hy">անկանխատեսելի</td></tr>
    <tr><td class="col-en">Usually = mostly = mainly</td><td class="col-hy">հիմնականում</td></tr>
    <tr><td class="col-en">happen</td><td class="col-hy">Տեղի ունենալ, կատարվել, պատահել</td></tr>
    <tr><td class="col-en">Sad = upset</td><td class="col-hy">տխուր</td></tr>
    <tr><td class="col-en">It happens</td><td class="col-hy">Պատահում է․․․</td></tr>
    <tr><td class="col-en">disappointed</td><td class="col-hy">հիասթափված</td></tr>
    <tr><td class="col-en">Not to…+verb</td><td class="col-hy">Որպեսզի չ․․․</td></tr>
    <tr><td class="col-en">circumstances</td><td class="col-hy">հանգամանքներ</td></tr>
    <tr><td class="col-en">For do+ing</td><td class="col-hy">Անելու համար</td></tr>
    <tr><td class="col-en">Related to</td><td class="col-hy">Կապված․․բանի հետ</td></tr>
    <tr><td class="col-en">To + do</td><td class="col-hy">Անելու համար</td></tr>
    <tr><td class="col-en">In… situations</td><td class="col-hy">․․․իրավիճակում</td></tr>
    <tr><td class="col-en">Beforehand = in advance</td><td class="col-hy">նախօրոք</td></tr>
    <tr><td class="col-en">Make decision</td><td class="col-hy">Որոշում կայացնել</td></tr>
    <tr><td class="col-en">Must + verb</td><td class="col-hy">Պետք է անել (to չկա)</td></tr>

    <!--    4th week words -->
    <tr><td class="col-en">Perhaps = maybe</td><td class="col-hy">գուցե</td></tr>
    <tr><td class="col-en">If, when + present</td><td class="col-hy">Will Չի դրվում</td></tr>
    <tr><td class="col-en">quote</td><td class="col-hy">ասույթ</td></tr>
    <tr><td class="col-en">If money is not an issue</td><td class="col-hy">Եթե գումարը խնդիր չէ</td></tr>
    <tr><td class="col-en">Share a message</td><td class="col-hy">Մեսիջ՝ միտք տարածել</td></tr>
    <tr><td class="col-en">shelter</td><td class="col-hy">կացարան</td></tr>
    <tr><td class="col-en">explode</td><td class="col-hy">պայթել</td></tr>
    <tr><td class="col-en">charity</td><td class="col-hy">բարեգործություն</td></tr>
    <tr><td class="col-en">exposure</td><td class="col-hy">պայթյուն</td></tr>
    <tr><td class="col-en">Start = set = found a business</td><td class="col-hy">Բիզնես հիմնել</td></tr>
    <tr><td class="col-en">calm</td><td class="col-hy">հանգիստ</td></tr>
    <tr><td class="col-en">provide</td><td class="col-hy">տրամադրել</td></tr>
    <tr><td class="col-en">Keep calm</td><td class="col-hy">հանգստացիր</td></tr>
    <tr><td class="col-en">income</td><td class="col-hy">եկամուտ</td></tr>
    <tr><td class="col-en">claim</td><td class="col-hy">պահանջել</td></tr>
    <tr><td class="col-en">pure</td><td class="col-hy">մաքուր</td></tr>
    <tr><td class="col-en">Problem = issue</td><td class="col-hy">խնդիր</td></tr>
    <tr><td class="col-en">poor</td><td class="col-hy">աղքատ</td></tr>
    <tr><td class="col-en">children</td><td class="col-hy">երեխաներ</td></tr>
    <tr><td class="col-en">To be on vacation = to be on holiday</td><td class="col-hy">Գնալ արձակուրդի</td></tr>
    <tr><td class="col-en">greater</td><td class="col-hy">Ավելի մեծ</td></tr>
    <tr><td class="col-en">Vacation = holiday</td><td class="col-hy">արձակուրդ</td></tr>
    <tr><td class="col-en">orphan</td><td class="col-hy">որբ</td></tr>
    <tr><td class="col-en">voyage</td><td class="col-hy">Ծովային ճանապարհորդություն</td></tr>
    <tr><td class="col-en">orphanage</td><td class="col-hy">մանկատուն</td></tr>
    <tr><td class="col-en">hiking</td><td class="col-hy">արշավ</td></tr>
    <tr><td class="col-en">Elderly house = nursing house = old age home</td><td class="col-hy">ծերանոց</td></tr>
    <tr><td class="col-en">camping</td><td class="col-hy">Վրանային ճամբար</td></tr>
    <tr><td class="col-en">To be afraid of</td><td class="col-hy">վախենալ</td></tr>
    <tr><td class="col-en">responsibility</td><td class="col-hy">պատասխանատվություն</td></tr>
    <tr><td class="col-en">Get lost = be lost</td><td class="col-hy">Կորել, մոլորվել</td></tr>
    <tr><td class="col-en">worse</td><td class="col-hy">Ավելի վատ</td></tr>
    <tr><td class="col-en">I am afraid of being lost</td><td class="col-hy">Ես վախենում եմ մոլորվելուց</td></tr>
    <tr><td class="col-en">Join a tour</td><td class="col-hy">Միանալ տուռի՝ շրջագայության</td></tr>
    <tr><td class="col-en">assessment</td><td class="col-hy">գնահատում</td></tr>
    <tr><td class="col-en">increase</td><td class="col-hy">աճել</td></tr>
    <tr><td class="col-en">Session, fashion</td><td class="col-hy">Sion = շն</td></tr>
    <tr><td class="col-en">decrease</td><td class="col-hy">նվազել</td></tr>
    <tr><td class="col-en">Plan out a trip</td><td class="col-hy">Պլանավորել ճանապարհորդություն</td></tr>
    <tr><td class="col-en">By myself = on my own</td><td class="col-hy">ինքնուրույն</td></tr>

    <!--    5th week words -->
    <tr><td class="col-en">-----</td><td class="col-hy">-----</td></tr>
    <tr><td class="col-en">Get engaged = engage</td><td class="col-hy">նշանադրվել</td></tr>
    <tr><td class="col-en">Tell somebody = say to somebody</td><td class="col-hy">Ասել մեկին</td></tr>
    <tr><td class="col-en">Get married = marry</td><td class="col-hy">ամուսնանալ</td></tr>
    <tr><td class="col-en">He said to me = he told me</td><td class="col-hy">Նա ասաց ինձ</td></tr>
    <tr><td class="col-en">engage</td><td class="col-hy">ներգրավել</td></tr>
    <tr><td class="col-en">As + subject + said…</td><td class="col-hy">Ինչպես ասել է․․․</td></tr>
    <tr><td class="col-en">To be engaged in</td><td class="col-hy">Ներգրավված լինել</td></tr>
    <tr><td class="col-en">As Ani and Kristina said…</td><td class="col-hy">Ինչպես Անին և Քրիստինան ասացին․․․</td></tr>
    <tr><td class="col-en">Mark out = differentiate</td><td class="col-hy">տարբերել</td></tr>
    <tr><td class="col-en">So + adjective</td><td class="col-hy">այնքան․․․</td></tr>
    <tr><td class="col-en">Let + dative</td><td class="col-hy">Թույլ տալ ինչ-որ մեկին</td></tr>
    <tr><td class="col-en">Such + adjective + noun</td><td class="col-hy">այնպիսի․․․</td></tr>
    <tr><td class="col-en">Let me</td><td class="col-hy">Թույլ տուր ինձ</td></tr>
    <tr><td class="col-en">So boring</td><td class="col-hy">Այնքան ձանձրալի է</td></tr>
    <tr><td class="col-en">Let the others live</td><td class="col-hy">Թող մյուսներն ապրեն</td></tr>
    <tr><td class="col-en">Such a boring day</td><td class="col-hy">Այնքան ձանձրալի օր է</td></tr>
    <tr><td class="col-en">Depend on</td><td class="col-hy">Կախված ինչ-որ բանից</td></tr>
    <tr><td class="col-en">Annoy = irritate</td><td class="col-hy">նյարդայնացնել</td></tr>
    <tr><td class="col-en">It depends on</td><td class="col-hy">Դա կախված է․․․</td></tr>
    <tr><td class="col-en">To be annoying = to be irritating</td><td class="col-hy">Նյարդայնացնող լինել</td></tr>
    <tr><td class="col-en">It depends on situation</td><td class="col-hy">Դա կախված է իրավիճակից</td></tr>
    <tr><td class="col-en">To be annoyed = to be irritated</td><td class="col-hy">Նյարդայնացած լինել</td></tr>
    <tr><td class="col-en">Quality = high-quality</td><td class="col-hy">Բարձրորակ, որակյալ</td></tr>
    <tr><td class="col-en">trip</td><td class="col-hy">ճանապարհորդություն</td></tr>
    <tr><td class="col-en">spare</td><td class="col-hy">Ազատ, դատարկ</td></tr>
    <tr><td class="col-en">spread</td><td class="col-hy">տարածել</td></tr>
    <tr><td class="col-en">Sphere (ph=ֆ)</td><td class="col-hy">ոլորտ</td></tr>
    <tr><td class="col-en">I have never + verb 3</td><td class="col-hy">Ես երբեք չեմ արել</td></tr>
    <tr><td class="col-en">Aim = goal</td><td class="col-hy">նպատակ</td></tr>
    <tr><td class="col-en">I never + verb 1</td><td class="col-hy">Ես երբեք չեմ անում</td></tr>
    <tr><td class="col-en">To have a rest = relax</td><td class="col-hy">հանգստանալ</td></tr>
    <tr><td class="col-en">I have never travelled</td><td class="col-hy">Ես երբեք չեմ եղել․․․</td></tr>
    <tr><td class="col-en">destination</td><td class="col-hy">վերջնակետ</td></tr>
    <tr><td class="col-en">I never travel</td><td class="col-hy">Ես երբեք չեմ ճամփորդում</td></tr>
    <tr><td class="col-en">Travel to = visit (no "to")</td><td class="col-hy">Այցելել երկիր, քաղաք</td></tr>
    <tr><td class="col-en">In general</td><td class="col-hy">առհասարակ</td></tr>
    <tr><td class="col-en">I want to travel to… = I want to visit…</td><td class="col-hy">Ես ուզում եմ լինել․․երկրում</td></tr>
    <tr><td class="col-en">Except for = beside</td><td class="col-hy">բացի</td></tr>
    <tr><td class="col-en">Discover = explore</td><td class="col-hy">բացահայտել</td></tr>
    <tr><td class="col-en">besides</td><td class="col-hy">Ի լրումն, նաև</td></tr>
    <tr><td class="col-en">More + long adjective</td><td class="col-hy">ավելի</td></tr>
    <tr><td class="col-en">More longer</td><td class="col-hy">Ավելի երկար</td></tr>
    <tr><td class="col-en">Er + short adjective</td><td class="col-hy">ավելի</td></tr>
    <tr><td class="col-en">More interestinger</td><td class="col-hy">Ավելի հետաքրքիր</td></tr>
    <tr><td class="col-en">Better (exception to rule)</td><td class="col-hy">Ավելի լավ</td></tr>
    <tr><td class="col-en">certainly</td><td class="col-hy">անշուշտ</td></tr>
    <tr><td class="col-en">What to do + well</td><td class="col-hy">(ինչպես) Լավ կերպով, ձևով</td></tr>
    <tr><td class="col-en">uncertain</td><td class="col-hy">անորոշ</td></tr>
    <tr><td class="col-en">Good + what</td><td class="col-hy">(ինչպիսի) լավ (ը)</td></tr>
    <tr><td class="col-en">By + transport (by car)</td><td class="col-hy">մեքենայով</td></tr>
    <tr><td class="col-en">-----</td><td class="col-hy">-----</td></tr>
    <tr><td class="col-en">satisfaction</td><td class="col-hy">բավարարվածություն</td></tr>
    <tr><td class="col-en">reveal</td><td class="col-hy">բացահայտել</td></tr>
    <tr><td class="col-en">headmaster</td><td class="col-hy">Դպրոցի տնօրեն</td></tr>
    <tr><td class="col-en">To be satisfied with</td><td class="col-hy">Բավարարված լինել ինչ-որ բանով</td></tr>
    <tr><td class="col-en">approval</td><td class="col-hy">համաձայնություն</td></tr>
    <tr><td class="col-en">Come to… mind</td><td class="col-hy">Գալ մտքին</td></tr>
    <tr><td class="col-en">Turn out</td><td class="col-hy">պարզվել</td></tr>
    <tr><td class="col-en">On/in my mind</td><td class="col-hy">մտքում</td></tr>
    <tr><td class="col-en">It turned out that…</td><td class="col-hy">Պարզվեց, որ</td></tr>
    <tr><td class="col-en">Have in mind</td><td class="col-hy">Ունենալ մտքում</td></tr>
    <tr><td class="col-en">Later = afterwards</td><td class="col-hy">Հետո, ավելի ուշ</td></tr>
    <tr><td class="col-en">Awful = terrible</td><td class="col-hy">ահավոր</td></tr>
    <tr><td class="col-en">gather</td><td class="col-hy">Հավաքել, հավաքվել</td></tr>
    <tr><td class="col-en">awesome</td><td class="col-hy">հրաշալի</td></tr>
    <tr><td class="col-en">together</td><td class="col-hy">միասին</td></tr>
    <tr><td class="col-en">envy</td><td class="col-hy">նախանձել</td></tr>
    <tr><td class="col-en">person</td><td class="col-hy">Անձ (հոգնակի չունի)</td></tr>
    <tr><td class="col-en">Football field</td><td class="col-hy">Ֆուտբոլի դաշտ</td></tr>
    <tr><td class="col-en">people</td><td class="col-hy">Մարդիկ (միշտ հոգնակի)</td></tr>
    <tr><td class="col-en">clay</td><td class="col-hy">կավ</td></tr>
    <tr><td class="col-en">toe</td><td class="col-hy">Ոտքի մատի մասը (թո)</td></tr>
    <tr><td class="col-en">Mud</td><td class="col-hy">ցեխ</td></tr>
    <tr><td class="col-en">conceal</td><td class="col-hy">թաքցնել</td></tr>
    <tr><td class="col-en">Mood</td><td class="col-hy">տրամադրություն</td></tr>
    <tr><td class="col-en">besides</td><td class="col-hy">Բացի դրանից</td></tr>
    <tr><td class="col-en">scary</td><td class="col-hy">վախենալու</td></tr>
    <tr><td class="col-en">beside</td><td class="col-hy">կողքին</td></tr>
    <tr><td class="col-en">scared</td><td class="col-hy">վախեցած</td></tr>
    <tr><td class="col-en">Except for</td><td class="col-hy">բացառությամբ</td></tr>
    <tr><td class="col-en">Pass away = die</td><td class="col-hy">մահանալ</td></tr>
    <tr><td class="col-en">remarkable</td><td class="col-hy">հիշարժան</td></tr>
    <tr><td class="col-en">superstition</td><td class="col-hy">սնահավատություն</td></tr>
    <tr><td class="col-en">Want to do</td><td class="col-hy">Ուզենալ անել</td></tr>
    <tr><td class="col-en">superstitious</td><td class="col-hy">սնահավատ</td></tr>
    <tr><td class="col-en">quiet</td><td class="col-hy">Լուռ, հանգիստ</td></tr>
    <tr><td class="col-en">Anxious = restless</td><td class="col-hy">անհանգիստ</td></tr>
    <tr><td class="col-en">quite</td><td class="col-hy">բավականին</td></tr>
    <tr><td class="col-en">contempt</td><td class="col-hy">նախատանք</td></tr>
    <tr><td class="col-en">Used to do</td><td class="col-hy">Նախկինում անել</td></tr>
    <tr><td class="col-en">Look with contempt</td><td class="col-hy">Նախատանքով նայել</td></tr>
    <tr><td class="col-en">I used to see = I saw it often</td><td class="col-hy">Առաջ հաճախ տեսնում էի</td></tr>
    <tr><td class="col-en">subconscious</td><td class="col-hy">ենթագիտակցություն</td></tr>
    <tr><td class="col-en">terrible</td><td class="col-hy">ահավոր</td></tr>
    <tr><td class="col-en">unconscious</td><td class="col-hy">անգիտակցաբար</td></tr>
    <tr><td class="col-en">terrifying</td><td class="col-hy">վախեցնող</td></tr>
    <tr><td class="col-en">scientific</td><td class="col-hy">գիտական</td></tr>
    <tr><td class="col-en">Fear - fears</td><td class="col-hy">Վախ - վախեր</td></tr>
    <tr><td class="col-en">explanation</td><td class="col-hy">բացատրություն</td></tr>
    <tr><td class="col-en">To fear = to be afraid of</td><td class="col-hy">վախենալ</td></tr>
    <tr><td class="col-en">The movie was scary = I was scared of the movie</td><td class="col-hy">Ֆիլմը վախենալու էր, ես վախեցա ֆիլմից</td></tr>

    </tbody>
</table>

<script>
    const btn1 = document.getElementById("b1");
    const btn2 = document.getElementById("b2");

    btn1.addEventListener("click", () => {
        document.querySelectorAll(".col-en").forEach(el => {
            el.classList.toggle("hidden");
        });
    });

    btn2.addEventListener("click", () => {
        document.querySelectorAll(".col-hy").forEach(el => {
            el.classList.toggle("hidden");
        });
    });
</script>

</body>
</html>

