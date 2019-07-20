docker build -t cloudgenius/wp:another     .
docker login
docker push cloudgenius/wp:another
kubectl set image deployment/wp wp=cloudgenius/wp:another
kubectl annotate deployment.v1.apps/wp kubernetes.io/change-cause=$(git log --format="%H" -n 1)
