

struct Base { virtual ~Base() noexcept {}; };
struct Derived: Base {};



auto derivedPtr(std::make_shared<Derived>());


auto basePtr(std::static_pointer_cast<Base>(derivedPtr));


auto constBasePtr(std::const_pointer_cast<Base const>(basePtr));


auto constDerivedPtr(std::dynamic_pointer_cast<Derived const>(constBasePtr));


template <typename To, typename From>
inline std::shared_ptr<To> reinterpret_pointer_cast(std::shared_ptr<From> const & ptr) noexcept {
    return std::shared_ptr<To>(ptr, reinterpret_cast<To *>(ptr.get()));
}








