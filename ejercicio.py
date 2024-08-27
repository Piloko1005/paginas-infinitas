import cv2
import numpy as np

imagen1 = cv2.imread('img/n-liebre.jpeg')
imagen2 = cv2.imread('img/flor-1.jpeg')

if imagen1 is None or imagen2 is None:
    print("Error al cargar las imágenes. Verifica las rutas y los nombres de los archivos.")
    exit()

imagen2 = cv2.resize(imagen2, (imagen1.shape[1], imagen1.shape[0]))

imagen_suma = cv2.add(imagen1, imagen2)

imagen_resta = cv2.subtract(imagen1, imagen2)

cv2.imwrite('imagen_suma.jpg', imagen_suma)
cv2.imwrite('imagen_resta.jpg', imagen_resta)

cv2.imshow('Imagen Suma', imagen_suma)
cv2.imshow('Imagen Resta', imagen_resta)
cv2.waitKey(0)
cv2.destroyAllWindows()