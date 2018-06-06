$(document).ready(function() {
  
    FormValidation.Validator.mayorEdad = {
        validate: function(validator, $field, options) {
            var value = $field.val();
            
           
            var fechanacimiento = moment(value, "DD-MM-YYYY");
          
            if(!fechanacimiento.isValid())
                return false;
          
            var years = moment().diff(fechanacimiento, 'years');
          
            return years > 18;
               
        }
    };

    $('#formularioRegistro').formValidation({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fechaN: {
                validators: {
                    notEmpty: {
                        message: 'La fecha de nacimiento es requerida'
                    },
                    mayorEdad: {
                        message: 'No es mayor de edad'
                    }
                }
            }
        }
    });
});