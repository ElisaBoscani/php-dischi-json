const { createApp } = Vue;
createApp({
  data() {
    return {
      discs: null,
      selectCard: null,
      modalVisible: false,
    };
  },
  methods: {
    centerCard(index) {
      this.modalVisible = true;
      axios.get("script.php? index =" + index).then((response) => {
        this.selectCard = response.data[index];
      });
    },
    closeModal() {
      this.modalVisible = false;
    },
  },

  mounted() {
    axios.get("script.php").then((response) => {
      this.discs = response.data;
    });
  },
}).mount("#app");
