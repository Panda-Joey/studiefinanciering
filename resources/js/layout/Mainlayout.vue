<script setup>
import { Link } from '@inertiajs/vue3'

// Importeer de CSS gewoon zo:
import '../../css/app.css'

</script>

<template>
  <div class="min-h-screen flex flex-col bg-gray-100">

    <!-- Navbar -->
     <nav class="bg-[#327b7d] text-white p-4 flex gap-6">
          <Link  href="/" class="font-bold hover:bg-[#2c8485] rounded-2xl ">Home</Link>
          <Link href="/krijgen " class="font-bold hover:bg-[#2c8485] rounded-2xl">Wat kan ik krijgen?</Link>
          <Link href="/aanmerking" class="font-bold hover:bg-[#2c8485] rounded-2xl">Kom ik in aanmerking?</Link>
          <Link href="/aanvraag" class="font-bold hover:bg-[#2c8485] rounded-2xl">Aanvragen</Link>
          <Link href="/terugbetaling" class="font-bold hover:bg-[#2c8485] rounded-2xl">Terugbetaling</Link>
          <Link href="/deadlines" class="font-bold hover:bg-[#2c8485] rounded-2xl">Deadlines</Link>
          <Link href="/faq" class="font-bold hover:bg-[#2c8485] rounded-2xl">FAQ</Link>
          <Link href="/fouten" class="font-bold hover:bg-[#2c8485] rounded-2xl">Fouten</Link>
        </nav>

    <!-- Content -->
    <main class="bg-gray-200 flex-1 p-8">
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-[#327b7d] text-white p-4 text-center">
      © 2026 Studiefinanciering
    </footer>

  </div>
</template>