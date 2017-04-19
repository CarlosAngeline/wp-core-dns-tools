<?php

	public function bloquearInput(){
            var input = document.getElementById('pass1');

            if(input.readOnly){
                input.readOnly = false;
            }else{
                input.readOnly = true;
            }

        }