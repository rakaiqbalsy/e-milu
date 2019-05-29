#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266mDNS.h>
#include <ESP8266HTTPClient.h>
#include <Adafruit_Fingerprint.h>
#include <SoftwareSerial.h>

HTTPClient http;
SoftwareSerial fpsensor(12, 13);
ESP8266WebServer server(80);
Adafruit_Fingerprint finger = Adafruit_Fingerprint(&fpsensor);

void(* ku_reset) (void) = 0;
String urlf1 = "http://192.168.43.118/Project-ST/Send/f1.php?finger_id=";
String urlf2 = "http://192.168.43.118/Project-ST/Send/f2.php?finger_id=";
String payload;

int fingerprintID = 0;
int query = 0;
const char* ssid = "Redmi2";
const char* password = "0987654321";
const char Start[] PROGMEM={"<!DOCTYPE html>\n<html><head><style>body {background-image: url('http://192.168.43.118/Project-ST/Images/ss.png');font-family: tahoma, helvetica, arial, sans-serif;background-repeat: no-repeat;background-attachment: fixed;}</style>\n    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\n</head>\n<body>\n    <div style=\"margin-top: 46%;\">\n        <center><a href=\"/next\"><button class=\"btn-danger\">SCAN NOW</button></a></center>\n    </div>\n</body>\n</html>\n"};
const char index_html[] PROGMEM={"<!DOCTYPE html>\n<html>\n<head>\n\t<title>Pemilihan RT | Voting</title>\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> \n\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\n\t<style type=\"text/css\">#small{width: 70%;}body{background-color: #c2c2a3;}</style>\n</head>\n<body>\n\t<div class=\"jumbroton\" style=\"background-color: black; padding: 20px; margin-bottom: 30px;\">\n\t\t<h1 style=\"text-decoration: underline; color: white;\">\n\t\t\t<img src=\"http://192.168.43.118/Project-ST/Images/logo.png\" style=\"width: 80px;\">\n\t\t\tPEMILIHAN KETUA RT\n\t\t</h1>\n        <marquee><h2 style=\"color: white;\">SISTEM INFORMASI PEMILU RAYA</h2></marquee>\n\t</div>\n\t<div class=\"container\">\n\t\t<center>\n\t\t\t<div class=\"container\" id=\"small\">\n\t\t\t\t<div class=\"row\">\n\t\t\t\t\t<div class=\"col-md-6\">\n                        <div class=\"card border-dark mb-1\">\n                            <div class=\"card-header text-center\"><b><h3>01</h3></b></div>\n                            <div class=\"card-body text-dark\">\n                                <div class=\"row\">\n                                    <center>\n                                \t\t<div class=\"col-md-6\">\n\t                                        <img src=\"http://192.168.43.118/Project-ST/Images/presiden.jpg\" alt=\"capres\" class=\"img-thumbnail\">\n\t                                    </div>\n                                \t</center>\n                                </div>\n                            </div>\n                            <div class=\"card-footer bg-transparent border-dark\">\n                                <div class=\"row\">\n                                    <div class=\"col-md-12\">\n                                        <h6>Reza Fauzi Rahman, ST, M.Kom.</h6>\n                                        <a href=\"/QpksQWMLAAmsaiT\"><button class=\"btn-danger\">PILIH NOMOR 1</button></a>\n                                    </div>\n                                </div>\n                            </div>\n                        </div>\n                    </div>\n                    <div class=\"col-md-6\">\n                        <div class=\"card border-dark mb-1\">\n                            <div class=\"card-header text-center\"><b><h3>02</h3></b></div>\n                            <div class=\"card-body text-dark\">\n                                <div class=\"row\">\n                                \t<center>\n                                \t\t<div class=\"col-md-6\">\n\t                                        <img src=\"http://192.168.43.118/Project-ST/Images/presiden.jpg\" alt=\"capres\" class=\"img-thumbnail\">\n\t                                    </div>\n                                \t</center>\n                                </div>\n                            </div>\n                            <div class=\"card-footer bg-transparent border-dark\">\n                                <div class=\"row\">\n                                \t<div class=\"col-md-12\">\n                                \t\t<h6>Reza Fauzi Rahman, ST, M.Kom.</h6>\n                                        <a href=\"/aKapSxAzaqWe\"><button  class=\"btn-success\">PILIH NOMOR 2</button></a>\n                                \t</div>\n                                </div>\n                            </div>\n                        </div>\n                    </div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</center>\n\t</div>\n</body>\n</html>"};
const char Not[] PROGMEM={"<!DOCTYPE html><html><head><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> <meta http-equiv=\"refresh\"content=\"2; url=/\"><style>body {background-image: url('http://192.168.43.118/Project-ST/Images/not.png');width: 100%;height: auto;}</style><link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\"></head><body></body></html>"};
String test = "<a href='/'>Selesai</a>";
void handleRoot() {
  query = 0;
  server.send_P(200,"text/html",Start);
}

void handleSent() {
  server.send_P(200,"text/html",index_html);
}

void setup() {
  ESP.wdtDisable();
  ESP.wdtEnable(WDTO_8S);
  finger.begin(57600);
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  Serial.println("");

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());

  server.on("/", handleRoot);
  
  server.on("/QpksQWMLAAmsaiT", [](){
    if(query = 0){
      server.send(200,"text/html", test);
    }else{
      http.begin(urlf1 + String(finger.fingerID));
      int httpCode = http.GET();
      String payload = http.getString();
      Serial.println(payload);
      server.send(200,"text/html", test);
      http.end();
      query = 0;
    }
  });

  server.on("/aKapSxAzaqWe", [](){
    if(query = 0){
      server.send(200,"text/html", test);
    }else{
      http.begin(urlf2 + String(finger.fingerID));
      int httpCode = http.GET();
      String payload = http.getString();
      Serial.println(payload);
      server.send(200,"text/html", test);
      http.end();
      query = 0;
    }
  });
  
  if (finger.verifyPassword()) {
    Serial.println("Found fingerprint sensor!");
  }
  else {
    Serial.println("Did not find fingerprint sensor :(");
    while (1) {
      delay(1);
    }
  }

  if (MDNS.begin("esp8266")) {
    Serial.println("MDNS responder started");
  }
 
  server.begin();
  Serial.println("HTTP server started");
}

void loop() {
  ESP.wdtFeed();
  server.handleClient();
  fingerprintID = getFingerprintIDez();
  delay(50);
  server.on("/next", [](){
    if (WiFi.status() == WL_CONNECTED && query == 1) {
      server.send(200,"text/html",index_html);
      delay(500);
    }
  });
}


int getFingerprintIDez() {
  uint8_t p = finger.getImage();
  if (p != FINGERPRINT_OK) return -1;

  p = finger.image2Tz();
  if (p != FINGERPRINT_OK) return -1;


  p = finger.fingerFastSearch();
  if (p != FINGERPRINT_OK) {
    Serial.println("not found");
    ESP.wdtFeed();
    query = 0;
    server.send_P(200,"text/html",Not);
    return -1;
  }
  Serial.print("Found ID #");
  Serial.print(finger.fingerID);
  Serial.print(" with confidence of ");
  Serial.println(finger.confidence);
  query = 1;
  return finger.fingerID;
}
