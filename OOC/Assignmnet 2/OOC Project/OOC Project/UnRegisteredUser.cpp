#include "UnRegisteredUser.h"
#include "Service.h"
#include <iostream>

using namespace std;

UnRegisteredUser::UnRegisteredUser() {
	Username = "";
	Password = 0;
	name = "";
}
UnRegisteredUser::UnRegisteredUser(string uName, int passw, string name) {
	Username = uName;
	Password = passw;
	name = name;
}
void UnRegisteredUser::Register(string uName, int passw, string name) {
	Username = uName;
	Password = passw;
	name = name;
}
void UnRegisteredUser::browseServicesAndPrices() {
	Service service;
	service.ViewServicesAndPrices();
}
UnRegisteredUser::~UnRegisteredUser() {


}