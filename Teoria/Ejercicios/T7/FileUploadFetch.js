addFile(event) {
   var formData = new FormData();
   formData.append("file", event.target.files[0]);
   formData.append('name', 'some value user types');
   formData.append('description', 'some value user types');
   console.log(event.target.files[0]);

   fetch(`http://.../gallery/${path}`, {
         method: 'POST',
         headers: {
            'Content-Type': 'multipart/form-data'
         },
         body: {
            event.target.files[0]
         }
      })
      .then((response) => response.json())
      .then((data) => {
         this.setState({
            images: data.images,
            isLoading: false
         });
         this.props.updateImages(data.images);
      })
      .catch(error => this.setState({
         error,
         isLoading: false
      }));
}
}

render() {
   return ( <
      div >
      <
      form encType = "multipart/form-data"
      action = "" >
      <
      input id = "id-for-upload-file"
      onChange = {
         this.addFile.bind(this)
      }
      type = "file" / >
      <
      /form>

      <
      /div>)
   }
}