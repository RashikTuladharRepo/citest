$(function(){
  var colleges = [
    { value:'Aberdeen International College', data:'Aberdeen International College'},
    { value:'Academia International College', data:'Academia International College'},
    { value:'Aims College', data:'Aims College'},
    { value:'Ambikeshwori Campus', data:'Ambikeshwori Campus'},
    { value:'Ambition Academy', data:'Ambition Academy'},
    { value:'Amrit Science Campus', data:'Amrit Science Campus'},
    { value:'Asian College of Higher Studies College of IT and Computer Science', data:'Asian College of Higher Studies College of IT and Computer Science'},
    { value:'Asian School of Management', data:'Asian School of Management'},
    { value:'Banke Bageshwori College', data:'Banke Bageshwori College'},
    { value:'Birat Kshitiz College', data:'Birat Kshitiz College'},
    { value:'Birat Multiple College', data:'Birat Multiple College'},
    { value:'Birendra Memorial College', data:'Birendra Memorial College'},
    { value:'Birendra Multiple Campus', data:'Birendra Multiple Campus'},
    { value:'Butwal Multiple Campus', data:'Butwal Multiple Campus'},
    { value:'College of Applied Business', data:'College of Applied Business'},
    { value:'Deerwalk Institute of Technology', data:'Deerwalk Institute of Technology'},
    { value:'Hari Khetan Multiple Campus', data:'Hari Khetan Multiple Campus'},
    { value:'Henry Ford International College', data:'Henry Ford International College'},
    { value:'Hetauda City College', data:'Hetauda City College'},
    { value:'Himalaya College of Engineering', data:'Himalaya College of Engineering'},
    { value:'Himalaya Darshan College', data:'Himalaya Darshan College'},
    { value:'Indreni College', data:'Indreni College'},
    { value:'Kathmandu BernHardt College', data:'Kathmandu BernHardt College'},
    { value:'Kathford International College', data:'Kathford International College'},
    { value:'Lumbini ICT College', data:'Lumbini ICT College'},
    { value:'Madan Bhandari Memorial College', data:'Madan Bhandari Memorial College'},
    { value:'Mission College', data:'Mission College'},
    { value:'Model Multiple College', data:'Model Multiple College'},
    { value:'Mount Annapurna Campus', data:'Mount Annapurna Campus'},
    { value:'Nagarjuna College of Information Technology', data:'Nagarjuna College of Information Technology'},
    { value:'National College of Computer Studies', data:'National College of Computer Studies'},
    { value:'National Infotech College', data:'National Infotech College'},
    { value:'Nepalgunj College', data:'Nepalgunj College'},
    { value:'New Summit College', data:'New Summit College'},
    { value:'Nihareeka College', data:'Nihareeka College'},
    { value:'NIST College', data:'NIST College'},
    { value:'Orchid International College', data:'Orchid International College'},
    { value:'Patan Multiple Campus', data:'Patan Multiple Campus'},
    { value:'Prime College', data:'Prime College'},
    { value:'RamSwaroop RamSagar Multiple Campus', data:'RamSwaroop RamSagar Multiple Campus'},
    { value:'Sagarmatha College of Science and Technology', data:'Sagarmatha College of Science and Technology'},
    { value:'Samajik College', data:'Samajik College'},
    { value:'Sambridhi College', data:'Sambridhi College'},
    { value:'Shaheed Smriti Multiple Campus', data:'Shaheed Smriti Multiple Campus'},
    { value:'Shree Yantra College', data:'Shree Yantra College'},
    { value:'Siddhanath Multiple Campus', data:'Siddhanath Multiple Campus'},
    { value:'Soch college of IT', data:'Soch college of IT'},
    { value:'St.Lawrence College', data:'St. Lawrence College'},
    { value:'St.Xaviers College', data:'St. Xaviers College'},
    { value:'Supernova College', data:'Supernova College'},
    { value:'Sushma and Godawari College', data:'Sushma and Godawari College'},
    { value:'Swastik College', data:'Swastik College'},
    { value:'Texas International College', data:'Texas International College'},
    { value:'Tinau Technical College', data:'Tinau Technical College'},
    { value:'Trinity International College', data:'Trinity International College'},
  ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#autocomplete').autocomplete({
    lookup: colleges,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
      $('#outputcontent').html(thehtml);
    }
  });
  

});