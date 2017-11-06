export default {
	
  getCurrentUser() {
  	return axios.get('/user/getLoggedinUser');
  }

}