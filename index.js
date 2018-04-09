var PrintfulClient = require('./printfulclient.js');

var key = '5jlzgir0-yfos-v483:lky0-et2jdgnhk76u';

var ok_callback = function(data, info){
    console.log('SUCCESS');
    console.log(data);
    //If response includes paging information, show total number available
    if(info.total_items){
        console.log('Total items available: '+info.total_items);
    }
}

var error_callback = function(message, info){
    console.log('ERROR ' + message);
    //Dump raw response
    console.log(info.response_raw);
}

///Construct client
var pf = new PrintfulClient(key);

pf.get('products').success(ok_callback).error(error_callback);
