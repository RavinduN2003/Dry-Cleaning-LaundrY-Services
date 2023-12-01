#include "DryCleaner.h"
#include <iostream>
#include "RegisteredUser.h"
#include "Order.h"

using namespace std;

DryCleaner::DryCleaner() {
	Username = "";
	password = 0;
	name = "";
	userId = 0;
}
DryCleaner::DryCleaner(string uName, int pw, string rName, int uId)  {
	Username = uName;
	password = pw;
	name = rName;
	userId = uId;

}
void DryCleaner::viewOrder() {
	Order order;
	order.getOrderDetails();
}
string DryCleaner::updateOrderDetails(string oName, string oType, double oPrice) {
	Order order1(oName, oType, oPrice);
	return "Successfull!";
}
void DryCleaner::acceptOrder(string oName, string oType, double oPrice) {
	Order odr(oName,oType,oPrice);
}
DryCleaner:: ~DryCleaner() {

}

