#pragma once
#include "RegisteredUser.h"
#include "Order.h"
#include "Report.h"
#include "DryCleaner.h"
#include <iostream>

using namespace std;

class Manager : public RegisteredUser
{
private:
	Order order;
public:
	Manager();
	Manager(string uName, int pw, string rName, int uId);
	void viewOrder();
	void assignOrder(string oName, string oType, double oPrice);
	void generateReports(int reportId, string rDes);
	~Manager();

};
