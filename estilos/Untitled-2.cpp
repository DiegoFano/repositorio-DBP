

{
 std::auto_ptr<int> p(new int(42));
 std::cout << *p;
} // p se elimina aquí, no hay fuga de memoria



std::auto_ptr<X> px = ...;
std::auto_ptr<X> py = px;
// px ahora está vacío


void f(std::auto_ptr<X> ) {
 // adquiere la propiedad de X
 // lo elimina al final del ámbito
};
std::auto_ptr<X> px = ...;
f(px); // f adquiere la propiedad del X subyacente
// px ahora está vacío
px->foo(); // Error: puntero nulo!



template <typename T>
class auto_ptr {
 T* ptr;
public:
 // Constructor de copia que transfiere la propiedad
 auto_ptr(auto_ptr& rhs)
 : ptr(rhs.release())
 { }
 
 // Operador de asignación de copia que transfiere la propiedad
 auto_ptr& operator=(auto_ptr& rhs) {
 reset(rhs.release());
 return *this;
 }
 
 // Libera el puntero y lo devuelve
 T* release() {
 T* tmp = ptr;
 ptr = nullptr;
 return tmp;
 }
 
 // Resetea el puntero, eliminando el anterior si es diferente
 void reset(T* tmp = nullptr) {
 if (ptr != tmp) {
 delete ptr;
 ptr = tmp;
 }
 }

/* otras funciones ... */
};









template <typename T>
class auto_ptr {
 T* ptr;
public:





auto_ptr(auto_ptr& rhs)
: ptr(rhs.release())
{ }




auto_ptr& operator=(auto_ptr& rhs) {
 reset(rhs.release());
 return *this;
}



T* release() {
 T* tmp = ptr;
 ptr = nullptr;
 return tmp;
}



void reset(T* tmp = nullptr) {
 if (ptr != tmp) {
 delete ptr;
 ptr = tmp;
 }
}




T a = ...;
T b(a);
assert(b == a);
