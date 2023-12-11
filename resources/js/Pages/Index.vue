<script setup>

import Create from './Componens/Create.vue';
import Table from './Componens/Table.vue';

defineProps({ products: Object })

</script>

<template>
    <Create />
    <Table :products="products" />
    
</template>