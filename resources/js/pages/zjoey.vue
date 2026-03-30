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
  <div class="grid grid-cols-1 gap-12 p-6 md:p-10">

    <div class="relative overflow-hidden rounded-2xl shadow-lg">
      <img src="/foto/weegje.png" class="w-full h-[400px] object-cover">
      <div class="absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-white text-4xl md:text-5xl font-bold mb-4">
          Alles over studiefinanciering
        </h1>
        <p class="text-white text-lg max-w-xl mb-6">
          Ontdek wat jij kan krijgen en hoe je het aanvraagt.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <Link href="/MBO" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-semibold transition">
            Check jouw recht als MBO-student →
          </Link>
          <Link href="/HBO_WO" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-semibold transition">
            Check jouw recht als HBO/WO-student →
          </Link>
        </div>
      </div>
    </div>

    <div class="bg-gray-100 rounded-2xl p-8 md:p-12 shadow-sm">
      <div class="max-w-3xl">
        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
          Ga je studeren of studeer je al en ben je 18 of ouder? Dan heb je recht op
          studiefinanciering. Op deze website leggen we op een eenvoudige manier
          uit welke financiële ondersteuning je kunt krijgen en hoe je dit kunt
          aanvragen en/of je het terug moet betalen.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed">
          Studiefinanciering kan bestaan uit verschillende onderdelen, zoals een
          basisbeurs, een aanvullende beurs, een lening en het studentenreisproduct.
          Niet iedereen krijgt hetzelfde, daarom is het belangrijk om te weten waar
          jij recht op hebt.
        </p>
      </div>
    </div>

    <div>
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Op deze website vind je duidelijke uitleg over:</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <Link href="/krijgen" class="bg-[#296d6e] p-6 rounded-2xl shadow text-white hover:bg-[#2c8485] transition">
          <h3 class="font-bold text-lg mb-2">Wat kun je krijgen?</h3>
          <p class="text-sm opacity-90">Kijk welke vormen van studiefinanciering er zijn.</p>
        </Link>

       
        <Link href="/aanvraag" class="bg-[#296d6e] p-6 rounded-2xl shadow text-white hover:bg-[#2c8485] transition">
          <h3 class="font-bold text-lg mb-2">Aanvragen</h3>
          <p class="text-sm opacity-90">Zo vraag je het eenvoudig aan.</p>
        </Link>

        <Link href="/terugbetaling" class="bg-[#296d6e] p-6 rounded-2xl shadow text-white hover:bg-[#2c8485] transition">
          <h3 class="font-bold text-lg mb-2">Terugbetalen</h3>
          <p class="text-sm opacity-90">Alles over terugbetalen en regels.</p>
        </Link>

        <Link href="/faq" class="bg-[#296d6e] p-6 rounded-2xl shadow text-white hover:bg-[#2c8485] transition">
          <h3 class="font-bold text-lg mb-2">FAQ</h3>
          <p class="text-sm opacity-90">Veelgestelde vragen over studiefinanciering.</p>
        </Link>

      </div>
    </div>

    <div class="bg-blue-50 border-l-8 border-blue-500 p-6 rounded-2xl shadow-sm">
      <p class="font-bold text-blue-900 text-xl mb-2 flex items-center">
        <span class="mr-2">💡</span> Wist je dat?
      </p>
      <p class="text-blue-800 text-lg">
        Je gratis kunt reizen met het openbaar vervoer als je een studentenreisproduct hebt aangevraagd. 
        <Link href="/aanvraag" class="text-blue-600 underline font-semibold hover:text-blue-700">Lees hier meer</Link>.
      </p>
    </div>

  </div>
</template>