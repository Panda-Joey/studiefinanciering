<script setup>
import MainLayout from '@/layout/Mainlayout.vue'
import { Link } from '@inertiajs/vue3'

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
        Wat kan ik krijgen met studiefinanciering?
      </h1>

        <p class="text-lg text-gray-700">
            Hier vind wat je allemaal kan krijgen met studiefinanciering, zoals het basisbedrag, aanvullende beurs, studentenreisproduct en meer.
        </p>
      
    </div>


          <!-- div voor text -->
          <div class="text-black">

            <p>
              Bij het aanvragen van studiefinanciering kun je verschillende soorten ondersteuning krijgen, afhankelijk van je persoonlijke situatie. Hier zijn de belangrijkste onderdelen van studiefinanciering:
              <p><strong>Studiefinanciering</strong> is een financiële ondersteuning van de overheid voor studenten in het mbo, hbo en wo. Het pakket bestaat uit vier onderdelen:
            <br><strong>Basisbeurs:</strong> Een maandelijks bedrag dat een gift wordt als je binnen 10 jaar je diploma haalt.
            <br><strong>Aanvullende beurs:</strong> Extra steun voor studenten van wie de ouders minder verdienen. Ook dit wordt een gift bij een diploma.
            <br><strong>Lening:</strong> Een optioneel bedrag dat je kunt lenen. Let op: dit moet je altijd met rente terugbetalen.
            <br><strong>Studentenreisproduct (OV):</strong> Hiermee reis je gratis of met korting. Het wordt een gift als je op tijd afstudeert. </p>
            </p>


            





          </div>
          
    <div class="bg-[#296d6e] p-6 rounded-2xl shadow hover:bg-[#2c8485]">
      <!-- Hier moet een link komen naar een enquête/quiz -->
    <Link href="/enqueteStufie">
      <h3 class="font-bold text-lg mb-2">Enquête</h3>
      <p> Weet jij al wat je kan krijgen? Doe de enquête en ontdek het!.</p>
    </Link>
  </div>

  
</template>