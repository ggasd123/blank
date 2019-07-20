docker build -t cloudgenius/wp:workshop     .
docker login
docker push cloudgenius/wp:workshop
kubectl set image deployment/wp wp=cloudgenius/wp:workshop
kubectl annotate deployment.v1.apps/wp kubernetes.io/change-cause=$(git log --format="%H" -n 1)
