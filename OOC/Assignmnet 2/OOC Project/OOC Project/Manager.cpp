#include "Manager.h"
#include "RegisteredUser.h"
#include "Order.h"
#include "Report.h"
#include "DryCleaner.h"
#include <iostream>

using namespace std;


Manager::Manager() {
	Username = "";
	password = 0;
	name = "";
	userId = 0;
}
Manager::Manager(string uName, int pw, string rName, int uId) {
	Username = uName;
	password = pw;
	name = rName;
	userId = uId;
}
void Manager::viewOrder() {
	Order order;
	order.getOrderDetails();
}
void Manager::assignOrder(string oName, string oType, double oPrice) {
	DryCleaner drycln;
	drycln.acceptOrder(oName,oType,oPrice);
}
void Manager::generateReports(int reportId, string rDes) {
	Report report;
	report.generateReports(reportId, rDes);
}
Manager::~Manager() {

}

