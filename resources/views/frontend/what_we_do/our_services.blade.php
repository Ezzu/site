@extends('layouts.single')

@section('title')
    <title>Our Services</title>
    <style>
        .header{
            position: relative;
            background: url("{{asset('uploads/resources/header3.jpg')}}");
            background-size: cover;
            background-position: center;
            background-origin: border-box;
            min-height: 400px;
        }
        .services ul > li{
            margin-top: 10px;
            padding-left: 10px;
        }
        .services ul li b{
            color : rgb(10,111,183)
        }
    </style>
@stop

@section('content')
    <div class="ml-5 mb-5 services">
        <div class="h1" id="single-heading">Our Services</div>
        <div class="mt-3 p text-justify">A student once enrolled, qualifying the conditions of admission in any &ldquo;Aabroo Welfare School&rdquo; becomes eligible for availing the following benefits at no cost.</div>
        <ul class='list' style="list-style-type: lower-alpha;">
            <li><b>Admission Fee:</b> No admission fee is charged for any reason at the time of admission to any Aabroo Welfare School.</li>
            <li><b>Tuition Fee:</b> No monthly, quarterly or yearly tuition fee is charged from any student in any way, under any circumstances.</li>
            <li><b>Books & Stationary:</b> All books and total stationary (school bags, pencils, erases, notebooks, sharpers, color pencils, pens, inks, examination answer sheets etc.) are provided free of cost from pre-school through high school.</li>
            <li><b>Uniform & School shoes:</b> Throughout the stay of a student at any &ldquo;Aabroo Welfare School&rdquo; every student gets four sets of uniform and two pairs of school shoes every year. No cost is charged from the students in any form.</li>
            <li><b>Food & Nutrition:</b> A healthy mind needs a healthy body. Our students being poorest of the poor are in urgent need of enough food and nutrition to keep healthy and sustain the pressure of schooling. All the students of Aabroo Welfare Schools get freshly cooked high nutrition midday meal. The daily menu of a balanced diet is advised by Dr. Naila Moeen, a reputed nutritionist in UK.</li>
            <li><b>Potable Water:</b> The quality of sub-soil water used of drinking purpose in Pakistan is very poor, especially in the habitats around the industrial waste water drains, is heavily injurious to health. All the Aabroo Welfare Schools are situated in the Urban Slums developed along such drains. Therefore most of the students/ parents, in our schools are found suffering from vomiting, loose motions, Jaundice, Gastritis, Liver infection, hepatitis-C etc. All Aabroo Welfare Schools are gifted with RO water filtration plants from the corporate sector. The filtered water is used for the school, parents and local community is also allowed to carry this water to their homes.</li>
            <li><b>Health assistance:</b> The entire student and their parents avail medical assistance from early to hospitalization, Pathological test and surgeries through Aabroo Izhar Medical Centers. These centers are available at all Aabroo welfare schools and are equipped with latest medical facilities and qualified Medical Officers. Each Aabroo-Izhar Medical Centre has an ambulance and driver available in case somebody needs to be relocated to the hospital. All Aabroo-Izhar Medical Centers are financially supported by Izhar Group.</li>
            <li><b>Library:</b> All Aabroo Welfare Schools have library facilities available. Entire student population is the members of these libraries by default. The teaching staff has to get this membership for a nominal fee. All this activity is supervised by the Honorary Chief Librarian, Mr. Mohammad Iqbal @ <b>Aabroo Barkat Hussain Public Library</b>, located within the premises of Aabroo Welfare Higher Secondary School (for boys) building.</li>
            <li><b>Science Laboratory:</b> A very well equipped Science Laboratory is provided with in the premises Aabroo Welfare Higher Secondary School (for boy) building. This laboratory is meant to fairly easily fulfill the requirement of Matric and Intermediate classes.</li>
            <li><b>Computer laboratory:</b> All Aabroo Welfare High Schools have Computer labs equipped with Servers, work stations, printers, networking, internet facility, and a competent computer teacher. The hardware repair and maintenance is the responsibility of the Network Administrator stationed at main IT department at Aabroo Welfare Higher Secondary School building.</li>
            <li><b>Sports & Extra Curricular activities:</b> Boys at Aabroo Welfare School like Football and Cricket. We have vast public play grounds available in the vicinity of our schools. Our teams accompanied by the sports teachers practice and play matches in the same. For the girls we have Table Tanis and Badminton. We have Bazm-e-Adab Societies in our schools and students learn speeches, debates, singing national songs, reciting poetry and many other activities by participating in these societies. </li>
            <li><b>Educational and pleasure trips:</b> We have a tradition of sending our students on both educational and pleasure trips thrice a year. Our students have visited Salt-mines, Punjab Meteorological labs, Lahore, Science Melaa at Ali institute, Lahore, Lahore Fort, Minar-e-Pakistan and Badshahi mosque and so on.  </li>
        </ul>
    </div>
@stop