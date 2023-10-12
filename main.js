const { createApp } = Vue;
createApp({
  data() {
    return {
      discs: null,
      selectCard: null,
      isModalVisible: false,
    };
  },
  methods: {
    centerCard(index) {
      this.isModalVisible = true;
      axios.get("script.php? index =" + index).then((response) => {
        this.selectCard = response.data[index];
      });
    },
    closeModal() {
      this.isModalVisible = false;
    },
  },

  mounted() {
    axios.get("script.php").then((response) => {
      this.discs = response.data;
    });
  },
}).mount("#app");
