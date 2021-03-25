<template>
  <app-layout>
    <template #header> Liste des formations </template>
    <h1>Coucou Mareme</h1>
    <div v-for="course in this.courseList" v-bind:key="course.id">
      <div>{{ course.title }}</div>
      <div>{{course.descriptio0}}</div>
    </div>
  </app-layout>
</template>
<script>
import AppLayout from "./../../Layouts/AppLayout";

export default { 
  components: {
    AppLayout,
  },
  data() {
    return {
      courseList: this.course,
    };
  },

  props: ["course"],
  mounted() {
    console.log(this.courseList);
  },
};
</script>