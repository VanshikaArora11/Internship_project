var form_submitted = false;

function submit_form ( )
{
  if ( form_submitted )
  {
    alert ( "Your form has already been submitted. Please wait..." );
    return false;
  }
  else
  {
    form_submitted = true;
    return true;
  }
}