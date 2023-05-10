const { createApp } = Vue

createApp({
  data() {
    return {
      tasks: null,
      getTasksUrl: "./getTasks.php",
      newTask: "",
      sendTasksUrl: "./sendtasks.php"
    }
  },
  methods: {
    addTask() {
      this.tasks.push({
        "text": this.newTask,
        "done": false
      });
      this.newTask = "";
      axios.post(this.sendTasksUrl, this.tasks, {
        headers: { 'Content-Type': 'multipart/form-data' }
      }).then((response) => console.log(response))
    },
    removeElement(index) {
      this.tasks.splice(index, 1)
    }
  },
},
  mounted() {
  axios.get(this.getTasksUrl)
    .then(response => {
      this.tasks = response.data
    })
}
}).mount('#app')