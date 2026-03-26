<script setup>
import MainLayout from '@/layout/Mainlayout.vue'
import { Link } from '@inertiajs/vue3'
import { ref, computed } from 'vue'


defineOptions({
  layout: MainLayout
})

//Berekening hoeveel geld je kan krijgen 
const woontThuis = ref('')
const inkomenOuders = ref('')
const opleiding = ref('')

const resultaat = computed(() => {
  let bedrag = 0

  if (woontThuis.value === 'thuis') bedrag += 110
  else if (woontThuis.value === 'uitwonend') bedrag += 300

  if (inkomenOuders.value === 'laag') bedrag += 250
  else if (inkomenOuders.value === 'midden') bedrag += 100

  if (opleiding.value === 'mbo') bedrag += 50

  return bedrag
})
</script>

<!-- Hier komt de enquête/quiz om te kijken hvl je van duo kan krijgen (bedragen zijn nog van chat) -->

<!-- Kleuren aanpasssen want ik kan niks zien -->
<template>
<div class="bg-pink-300 p-10 rounded-2xl shadow max-w-5xl mx-auto">
<p class="text-sm text-gray-500 mt-4">
  Dit is een schatting. Voor exacte bedragen kijk op DUO.nl
</p>
<h2 class="text-2xl font-bold mb-6">Studiefinanciering check</h2>

  <!-- Vraag 1 -->
  <div class="mb-4">
    <p>Woon je thuis of uitwonend?</p>
    <select v-model="woontThuis" class="w-full p-2 border rounded">
      <option value=""class="text-black">Maak een keuze</option>
      <option value="thuis"class="text-black">Thuiswonend</option>
      <option value="uitwonend" class="text-black">Uitwonend</option>
    </select>
  </div>

  <!-- Vraag 2 -->
  <div class="mb-4">
    <p>Inkomen ouders</p>
    <select v-model="inkomenOuders" class="w-full p-2 border rounded">
      <option value="" class="text-black">Maak een keuze</option>
      <option value="laag" class="text-black">Laag(€0-36.000)</option>
      <option value="midden" class="text-black">Midden(€36.001-70.000)</option>
      <option value="hoog" class="text-black">Hoog(€70.001+)</option>
    </select>
  </div>

  <!-- Vraag 3 -->
  <div class="mb-4">
    <p>Opleiding</p>
    <select v-model="opleiding" class="w-full p-2 border rounded">
      <option value="" class="text-black">Maak een keuze</option>
      <option value="mbo" class="text-black">MBO</option>
      <option value="hbo" class="text-black">HBO / WO</option>
    </select>
  </div>

  <!-- Resultaat -->
  <div class="text-black">
    <p class="font-bold">
      Geschatte studiefinanciering: €{{ resultaat }} per maand
    </p>
  </div>

</div>

</template>