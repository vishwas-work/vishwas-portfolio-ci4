class ProfileSiteGlobalFunction {
  constructor() {
    console.log("ProfileSiteGlobalFunction initialized");
  }

  // Method to send a POST request
  async sendPostRequest(endpoint, data) {
    try {
      const response = await fetch(`/${endpoint}`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
      });

      console.log(response);

      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }

      return await response.json();
    } catch (error) {
      console.error("Error sending POST request:", error);
      throw error;
    }
  }

  // Method to show alerts
  showAlert(type, message) {
    alert(`${type.toUpperCase()}: ${message}`);
  }
}
