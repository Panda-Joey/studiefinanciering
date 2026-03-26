<script setup>
import MainLayout from '@/layout/Mainlayout.vue'


</script>
<script>
export default {
  layout: MainLayout
}
</script>

<template>
    
  

    <!-- Content -->
    <div class="p-10">
      <h1 class="text-orange-500 text-4xl font-bold mb-4">
        Veelgestelde vragen over studiefinanciering
      </h1>

        <p class="text-lg text-gray-700">
            Hier vind je antwoorden op de meest gestelde vragen over studiefinanciering, zoals wie er in aanmerking komt, hoe je het kunt aanvragen, deadlines, terugbetaling en meer.
        </p>
      
    </div>

    <!-- <div class="bg-gray-200 p-10 rounded-2xl shadow "> -->

    <div v-show="activeIndex === index" class="pb-4 text-gray-600 transition-all duration-300">
      

    <details class="text-white bg-[#369a9c] p-6 rounded-2xl shadow hover:bg-[#2c8485] cursor-pointer  ">
          <summary class="font-bold">Wat is studiefinanciering en waaruit bestaat het?</summary><br>
          <p><strong>Studiefinanciering</strong> is een financiële ondersteuning van de overheid voor studenten in het mbo, hbo en wo. Het pakket bestaat uit vier onderdelen:
            <br><strong>Basisbeurs:</strong> Een maandelijks bedrag dat een gift wordt als je binnen 10 jaar je diploma haalt.
            <br><strong>Aanvullende beurs:</strong> Extra steun voor studenten van wie de ouders minder verdienen. Ook dit wordt een gift bij een diploma.
            <br><strong>Lening:</strong> Een optioneel bedrag dat je kunt lenen. Let op: dit moet je altijd met rente terugbetalen.
            <br><strong>Studentenreisproduct (OV):</strong> Hiermee reis je gratis of met korting. Het wordt een gift als je op tijd afstudeert. </p>
    </details>

    <details class=" text-white bg-[#38aba9] p-6 rounded-2xl shadow hover:bg-[#2c8485] cursor-pointer">
          <summary class="text-white font-bold">Hoeveel studiefinanciering krijg ik?</summary><br>
          <p>Het totale bedrag dat je maandelijks ontvangt, verschilt per persoon en hangt af van:
             <br><strong>Woonsituatie:</strong> Uitwonende studenten krijgen een hogere basisbeurs dan thuiswonende studenten.
              <br><strong>Inkomen van je ouders:</strong> Dit bepaalt de hoogte van je aanvullende beurs.
              <br><strong>Onderwijsniveau:</strong> Er gelden andere bedragen en regels voor mbo dan voor hbo/wo.
              <br><strong>Gezinssituatie:</strong> Andere studerende broers of zussen kunnen invloed hebben op de berekening.
              </p>
             
    </details>

    <details class="text-white bg-[#369a9c] p-6 rounded-2xl shadow hover:bg-[#2c8485] cursor-pointer ">
          <summary class="font-bold">Moet ik studiefinanciering terugbetalen?</summary><br>
          <p>Dat hangt af van het onderdeel en of je je diploma haalt:
            <br><strong>Basisbeurs:</strong> Is een gift als je binnen 10 jaar je diploma haalt. Doe je dit niet, dan moet je de beurs terugbetalen.
            <br><strong>Aanvullende beurs:</strong> Ook dit is een gift als je het diploma behaalt.
            <br><strong>OV:</strong> Het studentenreisproduct is een gift zolang je studiefinanciering ontvangt. Na je studie vervalt het recht op het reisproduct. Je hoeft dit niet terug te betalen, maar je kunt er ook niet meer gebruik van maken van de kortingen, tenzij je diploma niet behaald.
             <br><strong>Terugbetaling lening:</strong> Alles wat je leent moet altijd worden terugbetaald, inclusief rente. Je begint 5 jaar na het einde van je studie met terugbetalen, en de totale terugbetalingstermijn is maximaal 35 jaar. Na 35 jaar vervalt de restschuld, ook als je nog niet alles hebt terugbetaald.
             </p>
            
    </details>

    <details class=" text-white bg-[#38aba9] p-6 rounded-2xl shadow hover:bg-[#2c8485] cursor-pointer">
          <summary class="text-white font-bold">Hoeveel studiefinanciering krijg ik?</summary><br>
          <p>Het totale bedrag dat je maandelijks ontvangt, verschilt per persoon en hangt af van:
             <br><strong>Woonsituatie:</strong> Uitwonende studenten krijgen een hogere basisbeurs dan thuiswonende studenten.
              <br><strong>Inkomen van je ouders:</strong> Dit bepaalt de hoogte van je aanvullende beurs.
              <br><strong>Onderwijsniveau:</strong> Er gelden andere bedragen en regels voor mbo dan voor hbo/wo.
              <br><strong>Gezinssituatie:</strong> Andere studerende broers of zussen kunnen invloed hebben op de berekening.
              </p>
             
    </details>

    <!-- </div> -->

    </div>


    


</template>