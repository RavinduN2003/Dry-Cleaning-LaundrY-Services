#include "Order.h"
#include <iostream>

using namespace std;

Order::Order() {
	orderName = "";
	orderType = "";
	orderPrice = 0;
}
Order::Order(string oName, string oType, double oPrice) {
	orderName = oName;
	orderType = oType;
	orderPrice = oPrice;
}
void Order::updateOrderDetails(string oName, string oType, double oPrice) {
	orderName = oName;
	orderType = oType;
	orderPrice = oPrice;
}

void Order::getOrderDetails() {
	cout << endl;
	cout << "Order Name : " << orderName << endl;
	cout << "Order Type : " << orderType << endl;
	cout << "Order Price : " << orderPrice << endl;
	cout << endl;

}
double Order::calculateOrderCost(int oQty) {
	return oQty * orderPrice;
}
Order::~Order(){

};

