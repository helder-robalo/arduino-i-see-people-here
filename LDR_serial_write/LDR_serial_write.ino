int LDR_Pin = A0; //analog pin 0

void setup(){
  Serial.begin(9600);
}

void loop(){
  int LDRReading = analogRead(LDR_Pin); 
  Serial.flush();
  Serial.println(String(LDRReading));
  delay(1000);
}
