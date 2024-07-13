


std::unique_ptr<SDL_Surface, void(*)(SDL_Surface*)> a(pointer, SDL_FreeSurface);


struct SurfaceDeleter {
    void operator()(SDL_Surface* surf) {
        SDL_FreeSurface(surf);
    }
};


std::unique_ptr<SDL_Surface, SurfaceDeleter> a(pointer, SurfaceDeleter{});
std::unique_ptr<SDL_Surface, SurfaceDeleter> b(pointer); // equivalent to the above line



std::unique_ptr<SDL_Surface, SurfaceDeleter> // size of a pointer
std::unique_ptr<SDL_Surface, void(*)(SDL_Surface*)> // size of two pointers


std::shared_ptr<SDL_Surface> b(pointer, SDL_FreeSurface);


template <auto DeleteFn>
struct FunctionDeleter {
    template <class T>
    void operator()(T* ptr) {
        DeleteFn(ptr);
    }
};

template <class T, auto DeleteFn>
using unique_ptr_deleter = std::unique_ptr<T, FunctionDeleter<DeleteFn>>;

unique_ptr_deleter<SDL_Surface, SDL_FreeSurface> c(pointer);






