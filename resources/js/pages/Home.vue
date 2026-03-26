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
  
    <div>
       
      </div>

      


  
    <!-- Content -->
     
    <!-- Background veranderen -->
     <div class="bg-gray-100 rounded-2xl shadow p-10 flex-grow">   
      
     <div class="relative">
  <img src="/foto/weegje.png" class="w-full h-[400px] object-cover">

  <div class="absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-center px-4">
    <h1 class="text-white text-4xl md:text-5xl font-bold mb-4">
      Alles over studiefinanciering
    </h1>

    <p class="text-white text-lg max-w-xl mb-6">
      Ontdek in 2 minuten waar jij recht op hebt en hoe je het aanvraagt.
    </p>

    <Link href="/aanmerking" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-semibold">
      Check jouw recht →
    </Link>
  </div>
</div>



    <p class="text-lg text-gray-700 mb-6">
      Ga je studeren of studeer je al en ben je 18 of ouder? Dan heb je recht op
      studiefinanciering. Op deze website leggen we op een eenvoudige manier
      uit welke financiële ondersteuning je kunt krijgen en hoe je dit kunt
      aanvragen en/of je het terug moet betalen.
    </p>

     <p class="text-gray-700 mb-6">
      Studiefinanciering kan bestaan uit verschillende onderdelen, zoals een
      basisbeurs, een aanvullende beurs, een lening en het studentenreisproduct.
      Niet iedereen krijgt hetzelfde, daarom is het belangrijk om te weten waar
      jij recht op hebt.
    </p>

    <p class="text-gray-700 mb-6">
      Op deze website vind je duidelijke uitleg over:
    </p>

  

    <div class="grid md:grid-cols-2 gap-6 mt-8">

  
  
  <div class="bg-[#296d6e] p-6 rounded-2xl shadow hover:bg-[#2c8485]">
    <Link href="/krijgen">
      <h3 class="font-bold text-lg mb-2">Wat kun je krijgen?</h3>
      <p>Kijk welke vormen van studiefinanciering er zijn.</p>
    </Link>
  </div>
 
  <div class="bg-[#296d6e] p-6 rounded-2xl shadow hover:bg-[#2c8485]">
    <Link href="/aanmerking">
      <h3 class="font-bold text-lg mb-2">Kom ik in aanmerking?</h3>
      <p>Check of jij recht hebt op studiefinanciering.</p>
    </Link>
  </div>

  <div class="bg-[#296d6e] p-6 rounded-2xl shadow hover:bg-[#2c8485]">
    <Link href="/aanvraag">
      <h3 class="font-bold text-lg mb-2">Aanvragen</h3>
      <p>Zo vraag je het eenvoudig aan.</p>
    </Link>
  </div>

  <div  class="bg-[#296d6e] p-6 rounded-2xl shadow hover:bg-[#2c8485]">
    <Link href="/terugbetaling"> 
      <h3 class="font-bold text-lg mb-2">Terugbetalen</h3>
      <p>Alles over terugbetalen en regels.</p>
    </Link>
  </div>

</div>






<div class="bg-blue-100 border-l-4 border-blue-500 p-4 rounded mb-6">
  <p class="font-semibold text-blue-800">
    💡 Wist je dat?
  </p>
  <p class="text-blue-700">
    Je gratis kunt reizen met het openbaar vervoer als je een studentenreisproduct hebt aangevraagd. Wil je meer weten over wat je allemaal kunt aanvragen? <Link href="/aanvraag" class="text-blue-500 underline">Lees hier meer</Link>.
  </p>
</div>

      
    </div>


    <!-- <footer>
  <nav class="bg-green-500 text-white p-4 flex gap-6 w-full justify-center">
    <Link href="/" class="font-bold">Home</Link>
    <Link href="/krijgen" class="font-bold">Wat kan ik krijgen?</Link>
    <Link href="/aanmerking" class="font-bold">Kom ik in aanmerking?</Link>
    <Link href="/aanvraag" class="font-bold">Aanvragen</Link>
    <Link href="/terugbetaling" class="font-bold">Terugbetaling</Link>
    <Link href="/deadlines" class="font-bold">Deadlines</Link>
    <Link href="/faq" class="font-bold">FAQ</Link>
    <Link href="/fouten" class="font-bold">Fouten</Link>
  </nav>
</footer> -->

 

  

</template>