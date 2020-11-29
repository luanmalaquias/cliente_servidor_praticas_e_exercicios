import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';

@Component({
  selector: 'app-atendimento',
  templateUrl: './atendimento.component.html',
  styleUrls: ['./atendimento.component.css']
})
export class AtendimentoComponent implements OnInit {

  atendimentoCadastro : FormGroup;
    
  constructor() { 
    
  this.atendimentoCadastro = new FormGroup({
    'id': new FormControl(null, Validators.required), 
    'coordenador': new FormControl(null, Validators.required),
    'assunto': new FormControl(null, Validators.required),
    'descricao': new FormControl(null, Validators.required),
    'data': new FormControl(null, Validators.required)});  
    
  }
 
  ngOnInit() { }
    
  onSubmit(){
    let dados = `
    id: ${this.atendimentoCadastro.value.id} 
    coordenador: ${this.atendimentoCadastro.value.coordenador}
    assunto: ${this.atendimentoCadastro.value.assunto}
    descricao: ${this.atendimentoCadastro.value.descricao}
    data: ${this.atendimentoCadastro.value.data}`;
     
    console.log(dados);            
  }   

}