import { Component } from '@angular/core';
import { Http } from '@angular/http';

@Component({
  selector: 'app-fileuploader',
  templateUrl: './fileuploader.component.html',
  styleUrls: ['./fileuploader.component.css']
})
export class FileuploaderComponent  {

  constructor(private http: Http) { }

  uploadFile(event){
    let elem = event.target;
    if(elem.files.length > 0){
      console.log(elem.files[0]);
      let formData = new FormData();
      formData.append('file', elem.files[0]);

      this.newMethod(formData);
    }
  }


  private newMethod(formData: FormData) {
    this.http.post('http://localhost/upload-file/script.php', formData)
      .subscribe((data) => {
        console.log('Got some data from backend ', data);
      }, (error) => {
        console.log('Error! ', error);
      });
  }
}
