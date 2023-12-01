#include "Service.h"
#include <iostream>

using namespace std;

Service::Service() {
	serviceId = 0;
	serviceType = "";
	servicePrice = 0;
}
Service::Service(int sId, string sType, double sPrice) {
	serviceId = sId;
	serviceType = sType;
	servicePrice = sPrice;
}
void Service::ViewServicesAndPrices() {
	cout << endl;
	cout << "Service ID : " << serviceId << endl;
	cout << "Service Type : " << serviceType << endl;
	cout << "Servive Price : " << servicePrice << endl;
}
void Service::placeOrder(string oName, string oType, int oPrice) {
	Order order(oName,oType,oPrice);
}
Service::~Service() {

}